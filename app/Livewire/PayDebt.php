<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\Debt;
use Livewire\Component;

class PayDebt extends Component
{
    public $modal = false;
    public $message;
    public $phone;
    public $price;
    public $customer;
    public $debts = 0;
    protected $listeners = ['PayDebt' => 'updatedPayDebt'];

    public function mount() {}
    public function pay_debt()
    {
        $this->customer->debts -= $this->price;
        $this->customer->save();
        Debt::create([
            'customer_id' => $this->customer->id,
            'price' => $this->price,
            'type' => 'Оплачено',
        ]);
        $this->message = 'Долг погашен';
        $this->updatedPhone();
    }
    public function updatedPhone()
    {
        $customer = Customer::where('phone', $this->phone)->first();
        if ($customer) {
            if ($customer->debts <= 0) {
                $this->message = 'У этого клиента нет долгов';
            }
            $this->debts = $customer->debts;
            $this->customer = $customer;
        } else {
            $this->debts = 0;
            $this->customer = null;
        }
    }
    public function updatedPayDebt()
    {
        $this->modal = true;
    }
    public function closemodal()
    {
        $this->modal = false;
        $this->reset('phone', 'price', 'customer');
    }
    public function render()
    {
        return view('livewire.pay-debt');
    }
}
