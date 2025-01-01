<?php

namespace App\Livewire;

use Livewire\Component;

class Menu extends Component
{
    public function render()
    {
        return view('livewire.menu');
    }
    public function close_change()
    {
        $this->dispatch('updateChanges');
    }
    public function paydebt()
    {
        $this->dispatch('PayDebt');
    }
    public function return_pro()
    {
        $this->dispatch('returnModalUdated');
    }
}
