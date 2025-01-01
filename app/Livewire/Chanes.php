<?php

namespace App\Livewire;

use App\Models\Change as ModelChanges;
use App\Models\Debt;
use App\Models\Exprnditure;
use App\Models\Order;
use App\Models\ReturnProduct;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chanes extends Component
{
    public $orderTotal;
    public $debtSellTotal;
    public $debtPayTotal;
    public $expenditureTotal;
    public $returnProductsTotal;
    public $total;
    public $suborders;
    public $message;
    public $modal = false;
    protected $listeners = ['updateChanges' => 'changesUpdate'];
    public function mount()
    {
        $lastChange = ModelChanges::orderBy('id', 'desc')->first();
        $lastChangeDate = $lastChange ? $lastChange->created_at : Carbon::createFromTimestamp(0);

        // Вычисления
        $this->orderTotal = Order::whereBetween('created_at', [$lastChangeDate, Carbon::now()])->sum('total');
        $this->debtPayTotal = Debt::whereBetween('created_at', [$lastChangeDate, Carbon::now()])
            ->where('type', 'Оплачено')
            ->sum('price');
        $this->debtSellTotal = Debt::whereBetween('created_at', [$lastChangeDate, Carbon::now()])
            ->where('type', 'Получено')
            ->sum('price');
        $this->returnProductsTotal = ReturnProduct::whereBetween('created_at', [$lastChangeDate, Carbon::now()])->sum('price');
        $this->expenditureTotal = Exprnditure::whereBetween('created_at', [$lastChangeDate, Carbon::now()])->sum('price');

        // Итоговый расчёт
        $this->total = $this->orderTotal - $this->debtSellTotal - $this->expenditureTotal + $this->debtPayTotal - $this->returnProductsTotal;
    }

    public function changesUpdate()
    {
        $this->modal = true;
    }

    public function closemodal()
    {
        $this->modal = false;
    }
    public function changeClose()
    {

        ModelChanges::create([
            'subtotal' => $this->orderTotal,
            'returns' => $this->returnProductsTotal,
            'expenditures' => $this->expenditureTotal,
            'debts_pay' => $this->debtPayTotal,
            'debts_sell' => $this->debtSellTotal,
            'total' => $this->total,
        ]);

        $this->modal = false;
        Auth::logout();
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.chanes');
    }
}
