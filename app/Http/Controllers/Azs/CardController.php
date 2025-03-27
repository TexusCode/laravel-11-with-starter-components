<?php

namespace App\Http\Controllers\Azs;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\CardRegister;
use App\Models\User;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function addcard()
    {
        return view('azs.pages.add-card');
    }
    public function addcardpost(Request $request)
    {
        $card = CardRegister::where('qrcode', $request->qrcode)->first();
        if ($card) {
            return back()->with('info', 'Карта уже есть в системе!');
        } else {
            $card = new CardRegister();
            $card->qrcode = $request->qrcode;
            $card->save();
            return back()->with('info', 'Карта успешно добавлено в систему!');
        }
        return view('azs.pages.add-card');
    }

    public function registercard()
    {
        return view('azs.pages.register-card');
    }

    public  function shod()
    {
        $user = User::all();
    }
    public function registercardpost(Request $request)
    {
        $card = CardRegister::where('qrcode', $request->qrcode)->first();
        if ($card) {
            $qrcode = $request->qrcode;
            return view('azs.pages.register-page-success', compact('qrcode'));
        } else {
            return back()->with('info', 'Эта карта недействительна или является подделкой. Такой карты нет в системе!');
        }
    }

    public function registercardsuccesspost(Request $request)
    {
        $user = Card::where('phone', $request->phone)->first();
        if ($user) {
            $qrcode = $request->qrcode;
            return redirect()->route('home')->with('info', 'У этого пользователя уже есть бонусная карта. Дважды не выдаётся одному пользователю!');
        } else {
            $card = new Card();
            $card->qrcode = $request->qrcode;
            $card->firstname = $request->firstname;
            $card->phone = $request->phone;
            $card->status = 'active';
            $card->save();

            $phone = $request->phone;
            $message = "Поздравляем! Вы получили бонусную карту. В дальнейшем при каждой заправке бонусы будут зачисляться на ваш баланс, и их можно потратить на топливо.";

            $smsController = new SmsController();
            $smsResponse = $smsController->sendSms($phone, $message);

            return redirect()->route('home')->with('info', 'Карта успешно зарегистрирована!');
        }
    }
}
