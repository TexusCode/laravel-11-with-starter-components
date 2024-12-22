<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DefaultInput extends Component
{
    public $value;
    public $placeholder;
    public $name;
    public $type;
    public $id;
    public $model;
    public $class;
    public $required;

    public function __construct($value = "", $model = "", $placeholder = "", $name = "", $type = "text", $id = "", $class = "", $required = "")
    {
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->name = $name;
        $this->type = $type;
        $this->id = $id;
        $this->model = $model;
        $this->class = $class;
        $this->required = $required;
    }
    public function render(): View|Closure|string
    {
        return view('components.default-input');
    }
}
