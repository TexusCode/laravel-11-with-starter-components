<?php

namespace App\Livewire;

use Livewire\Component;

class Submit extends Component
{
    public $text;
    public function render()
    {
        return view('livewire.submit');
    }
}
