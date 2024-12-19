<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PrimaryLink extends Component
{
    public $color;
    public $text;
    public $class;
    public $font;
    public $link;

    public function __construct($color = "", $text = "", $class = "", $font = "", $link = "")
    {
        $this->color = $color;
        $this->text = $text;
        $this->class = $class;
        $this->font = $font;
        $this->link = $link;
    }
    public function render(): View|Closure|string
    {
        return view('components.primary-link');
    }
}
