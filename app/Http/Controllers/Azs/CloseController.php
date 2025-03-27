<?php

namespace App\Http\Controllers\Azs;

use App\Http\Controllers\Controller;
use App\Models\Close;
use App\Models\Expenses;
use App\Models\FuelBag;
use App\Models\FuelDayPrice;
use App\Models\Tranization;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CloseController extends Controller
{
    public function close()
    {
        $close = Close::orderBy('created_at', 'desc')->get();
        return view('azs.pages.close', compact('close'));
    }

    public function closepost(Request $request)
    {
        $fuelprice = FuelDayPrice::find(1);
        $benzin92 = $fuelprice->benzin92;
        $benzin95 = $fuelprice->benzin95;
        $gas = $fuelprice->gas;
        $diesel = $fuelprice->diesel;
        $summma = (($request->benzin92 *  $benzin92) + ($request->benzin95 *  $benzin95) + ($request->gas *  $gas) + ($request->diesel *  $diesel) + $request->electro);

        // Получаем дату последнего закрытия смены
        $lastClose = Close::latest('created_at')->first();

        // Если есть предыдущее закрытие, берем его дату; если нет — берем начало дня
        $lastCloseDate = $lastClose ? $lastClose->created_at : Carbon::now()->startOfDay();

        // Расчёт расходов и снятий с момента последнего закрытия
        $totalExpenses = Expenses::where('created_at', '>', $lastCloseDate)->sum('price');
        $withdrawals = Tranization::where('created_at', '>', $lastCloseDate)
            ->where('operationtype', 'Снятие')
            ->sum('cash');
        $nall = $summma - $totalExpenses - $withdrawals;
        $close = new Close();
        $close->benzin92 = $request->benzin92;
        $close->benzin92summ = ($request->benzin92 *  $benzin92);
        $close->benzin95 = $request->benzin95;
        $close->benzin95summ = ($request->benzin95 *  $benzin95);
        $close->gas = $request->gas;
        $close->gassumm = ($request->gas *  $gas);
        $close->diesel = $request->diesel;
        $close->dieselsumm = ($request->diesel *  $diesel);
        $close->electro = $request->electro;
        $close->summ = $summma;
        $close->ras = $totalExpenses;
        $close->bonus = $withdrawals;
        $close->nal = $nall;
        $close->save();

        $phone = '+992907230333';
        $message = "Смена закрыта:\nСумма продаж: $summma с\nРасходы: $totalExpenses с\nЗачислено бонусов: $withdrawals с\nНаличные в кассе: $nall с";


        $smsController = new SmsController();
        $smsResponse = $smsController->sendSms($phone, $message);

        $fuelbag = FuelBag::find(1);

        $fuelbag->benzin92 -= $request->benzin92;
        $fuelbag->benzin95 -= $request->benzin95;
        $fuelbag->gas -= $request->gas;
        $fuelbag->diesel -= $request->diesel;

        $fuelbag->save();


        return back()->with('info', 'Смена закрыта!');
    }
}
