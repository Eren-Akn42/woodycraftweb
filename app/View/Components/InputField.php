<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    public $type;
    public $name;
    public $value;
    public $placeholder;

    public function __construct($type, $name, $value = '', $placeholder)
    {
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
    }

    public function render(): View|Closure|string
    {
        return view('components.input-field');
    }
}
