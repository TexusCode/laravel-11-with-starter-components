<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LabelText extends Component
{
    public $color;
    public $text;
    public $class;
    public $font;

    public function __construct($color = "", $text = "", $class = "", $font = "")
    {
        $this->color = $color;
        $this->text = $text;
        $this->class = $class;
        $this->font = $font;
    }
    public function render(): View|Closure|string
    {
        return view('components.label-text');
    }
}
