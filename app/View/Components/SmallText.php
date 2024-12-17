<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SmallText extends Component
{
    public $color;
    public $text;
    public $class;

    public function __construct($color = "", $text = "", $class = "")
    {
        $this->color = $color;
        $this->text = $text;
        $this->class = $class;
    }
    public function render(): View|Closure|string
    {
        return view('components.small-text');
    }
}
