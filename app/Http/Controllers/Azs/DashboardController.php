<?php

namespace App\Http\Controllers\Azs;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Close;
use App\Models\Expenses;
use App\Models\FuelBag;
use App\Models\FuelDayPrice;
use App\Models\Tranization;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function updatedData()
    {
        return view('updated-data');
    }
    public function dash()
    {
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        $summ = Close::whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->sum('summ');
        $ras = Close::whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->sum('ras');
        $bonus = Close::whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->sum('bonus');
        $nal = Close::whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->sum('nal');

        $fuelbag = FuelBag::find(1);
        $fuelprise = FuelDayPrice::find(1);

        return view('azs.admin.dashboard', compact('summ', 'ras', 'bonus', 'nal', 'fuelbag', 'fuelprise'));
    }

    public function transh()
    {
        $history = Tranization::orderBy('created_at', 'desc')->get();

        return view('azs.admin.tarnsh', compact('history'));
    }
    public function ras()
    {
        $ras = Expenses::orderBy('created_at', 'desc')->get();

        return view('azs.admin.ras', compact('ras'));
    }

    public function cards()
    {
        $cards = Card::orderBy('created_at', 'desc')->get();
        return view('azs.admin.cards', compact('cards'));
    }

    public function fuelbag()
    {
        $fuelbag = FuelBag::find(1);
        return view('azs.admin.fuelbag', compact('fuelbag'));
    }

    public function fuelbagpost(Request $request)
    {
        $fuelbag = FuelBag::find(1);

        $fuelbag->benzin92 = $request->benzin92;
        $fuelbag->benzin95 = $request->benzin95;
        $fuelbag->diesel = $request->diesel;
        $fuelbag->gas = $request->gas;
        $fuelbag->save();

        return back();
    }
}
