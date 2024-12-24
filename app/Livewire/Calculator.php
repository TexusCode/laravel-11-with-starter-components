<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $one;
    public $input;
    public function mount() {}
    public function onebutton()
    {
        $this->one = 1;
    }
    public function render()
    {
        return view('livewire.calculator');
    }
}
