<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PrimaryInput extends Component
{
    public $value;
    public $placeholder;
    public $name;
    public $type;
    public $icon;
    public $id;
    public $model;
    public $style;
    public $class;

    public function __construct($value = "", $model = "", $placeholder = "", $name = "", $type = "text", $icon ="", $id ="", $style ="green", $class = "")
    {
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->name = $name;
        $this->type = $type;
        $this->icon = $icon;
        $this->id = $id;
        $this->model = $model;
        $this->style = $style;
        $this->class = $class;
    }
    public function render(): View|Closure|string
    {
        return view('components.primary-input');
    }
}
