<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PrimaryButton extends Component
{
    public $type;
    public $text;
    public $click;
    public $model;
    public $icon;
    public $style;
    public $class;

    public function __construct($text="Пример кнопка", $type ="button", $model ="", $click = "", $icon ="", $style ="green", $class = "green")
    {
        $this->type=$type;
        $this->text= $text;
        $this->click= $click;
        $this->model= $model;
        $this->icon= $icon;
        $this->style= $style;
        $this->class= $class;
    }

    public function render(): View|Closure|string
    {
        return view('components.primary-button');
    }
}
