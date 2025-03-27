<?php

namespace App\Http\Controllers\Azs;

use App\Http\Controllers\Controller;
use App\Models\FuelDayPrice;
use Illuminate\Http\Request;

class Fuelnormcontroller extends Controller
{
    public function fuelnorm()
    {
        $fuelnorm = FuelDayPrice::find(1);
        return view('azs.pages.fuel-norm', compact('fuelnorm'));
    }

    public function fuelnormpost(Request $request)
    {
        // Находим запись с нормой топлива
        $fuelnorm = FuelDayPrice::find(1);

        // Обновляем значения для бензина, газа и дизеля
        $fuelnorm->benzin92 = $request->benzin92;
        $fuelnorm->benzin95 = $request->benzin95;
        $fuelnorm->gas = $request->gas;
        $fuelnorm->diesel = $request->diesel;

        // Сохраняем изменения
        $fuelnorm->save();

        // Возвращаемся назад с сообщением об успехе
        return back()->with('info', 'Дневная норма цен на топливо успешно обновлена');
    }
}
