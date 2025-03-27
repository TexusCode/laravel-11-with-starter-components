<?php

namespace App\Livewire;

use App\Models\FuelDayPrice;
use Livewire\Component;

class FuelPrice extends Component
{
    public $benzin92;
    public $benzin95;
    public $gas;
    public $diesel;

    public function render()
    {
        $price = FuelDayPrice::find(1);

        $this->benzin92 = $price->benzin92;
        $this->benzin95 = $price->benzin95;
        $this->gas = $price->gas;
        $this->diesel = $price->diesel;

        return view('livewire.fuel-price');
    }
}
