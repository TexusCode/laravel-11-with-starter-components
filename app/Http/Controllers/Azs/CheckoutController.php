<?php

namespace App\Http\Controllers\Azs;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\FuelDayPrice;
use App\Models\Partner;
use App\Models\Tranization;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        return view('azs.pages.checkout');
    }

    public function checkoutpost(Request $request)
    {
        $qrcode = Card::where('qrcode', $request->qrcode)->first();

        if ($qrcode) {
            $fuelprice = FuelDayPrice::find(1);
            return view('azs.pages.card-details', compact('qrcode', 'fuelprice'));
            // return back()->with('info', 'карта найдено!');
        } else {
            return back()->with('info', 'Карта не найдена или может быть не зарегистрирована, либо является подделкой!');
        }
    }

    public function checkoutcashon(Request $request)
    {
        $qrcode = Card::where('qrcode', $request->qrcode)->first();
        $partner = Partner::where('qrcode', $request->qrcode)->first();
        $fuelpriceday = FuelDayPrice::find(1);
        $fueltype = $request->fuel;
        $summ = $request->summ;

        if ($fueltype === 'benzin92') {
            $bonus = ($summ / $fuelpriceday->benzin92) * 0.1;

            $history = new Tranization();
            $history->cardid = $qrcode->id;
            $history->fueltype = 'Бензин 92';
            $history->operationtype = 'Зачисление';
            $history->cash = $bonus;
            $history->save();
        } elseif ($fueltype === 'benzin95') {
            $bonus = ($summ / $fuelpriceday->benzin95) * 0.1;
            $history = new Tranization();
            $history->cardid = $qrcode->id;
            $history->fueltype = 'Бензин 95';
            $history->operationtype = 'Зачисление';
            $history->cash = $bonus;
            $history->save();
        } elseif ($fueltype === 'gas') {
            $bonus = ($summ / $fuelpriceday->gas) * 0.1;
            $history = new Tranization();
            $history->cardid = $qrcode->id;
            $history->fueltype = 'Газ';
            $history->operationtype = 'Зачисление';
            $history->cash = $bonus;
            $history->save();
        } elseif ($fueltype === 'diesel') {
            $bonus = ($summ / $fuelpriceday->diesel) * 0.1;
            $history = new Tranization();
            $history->cardid = $qrcode->id;
            $history->fueltype = 'Дизель';
            $history->operationtype = 'Зачисление';
            $history->cash = $bonus;
            $history->save();
        }

        $bonussumm = round($bonus, 2);
        if ($partner) {
            $part = Card::where('qrcode', $partner->partner_qr)->first();
            if ($part) {
                $bonuspar = $bonussumm * 30 / 100;
                $bonussec = $bonussumm * 70 / 100;
                $part->balance += $bonuspar;
                $part->save();

                $qrcode->balance += $bonussec;
                $qrcode->save();

                $ostatok = $qrcode->balance;
                $ostatok2 = $part->balance;
                $fuelprice = FuelDayPrice::find(1);

                $phone = $qrcode->phone;
                $message = "На ваш бонусный баланс зачислено $bonussec сомони. Остаток: $ostatok сомони.";

                $parname = $part->firstname;
                $phone2 = $part->phone;
                $message2 = "На ваш бонусный баланс зачислено $bonuspar сомони за счет вашего партнера $parname. Остаток: $ostatok2 сомони.";

                // $smsController = new SmsController();
                // $smsResponse = $smsController->sendSms($phone, $message);
                // $smsController = new SmsController();
                // $smsResponse = $smsController->sendSms($phone2, $message2);

                return view('azs.pages.card-details', [
                    'qrcode' => $qrcode,
                    'fuelprice' => $fuelprice,
                    'info' => "$bonussumm сомони бонус успешно зачислен!."
                ]);
            }
        } else {
            $qrcode->balance += $bonussumm;
            $qrcode->save();

            $ostatok = $qrcode->balance;
            $fuelprice = FuelDayPrice::find(1);

            $phone = $qrcode->phone;
            $message = "На ваш бонусный баланс зачислено $bonussumm сомони. Остаток: $ostatok сомони.";

            // $smsController = new SmsController();
            // $smsResponse = $smsController->sendSms($phone, $message);
            return view('azs.pages.card-details', [
                'qrcode' => $qrcode,
                'fuelprice' => $fuelprice,
                'info' => "$bonussumm сомони бонус успешно зачислен!."
            ]);
        }
    }

    public function checkoutdetails()
    {
        return view('azs.pages.card-details');
    }

    public function checkoutcashoff(Request $request)
    {
        // Получаем карту по QR-коду
        $qrcode = Card::where('qrcode', $request->qrcode)->first();

        // Сумма для снятия и текущий баланс
        $cashoff = $request->cashoff;
        $balance = $qrcode->balance;

        // Проверяем, достаточно ли средств для снятия
        if ($cashoff <= $balance) {
            // Если достаточно, снимаем сумму и сохраняем обновленный баланс
            $qrcode->balance -= $cashoff;
            $qrcode->save();

            // Получаем цены на топливо
            $fuelprice = FuelDayPrice::find(1);

            $history = new Tranization();
            $history->cardid = $qrcode->id;
            $history->operationtype = 'Снятие';
            $history->cash = $cashoff;
            $history->save();

            $phone = $qrcode->phone;
            $message = "Вы сняли с вашего бонусного баланса $cashoff сомони. Остаток: $qrcode->balance сомони.";

            // $smsController = new SmsController();
            // $smsResponse = $smsController->sendSms($phone, $message);
            // Возвращаем представление с сообщением об успешном снятии
            return view('azs.pages.card-details', [
                'qrcode' => $qrcode,
                'fuelprice' => $fuelprice,
                'info' => "$cashoff сомони успешно снято с вашего баланса!"
            ]);
        }

        // Если сумма снятия больше, чем баланс, выводим сообщение об ошибке
        $fuelprice = FuelDayPrice::find(1);
        return view('azs.pages.card-details', [
            'qrcode' => $qrcode,
            'fuelprice' => $fuelprice,
            'info' => "Запрашиваемая сумма $cashoff сомони превышает ваш баланс. Пожалуйста, укажите корректную сумму!"
        ]);
    }
}
