<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DefaultLink extends Component
{
    public $link;
    public $text;
    public $click;
    public $icon;
    public $class;

    public function __construct($text = "Пример линк", $link = "/", $click = "", $icon = "", $class = "")
    {
        $this->link = $link;
        $this->text = $text;
        $this->click = $click;
        $this->icon = $icon;
        $this->class = $class;
    }
    public function render(): View|Closure|string
    {
        return view('components.default-link');
    }
}
