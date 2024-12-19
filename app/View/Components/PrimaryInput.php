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
    public $required;
    public $focus;

    public function __construct($value = "", $focus = "", $model = "", $placeholder = "", $name = "", $type = "text", $icon ="", $id ="", $style ="green", $class = "", $required="")
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
        $this->required = $required;
        $this->focus = $focus;
    }
    public function render(): View|Closure|string
    {
        return view('components.primary-input');
    }
}
