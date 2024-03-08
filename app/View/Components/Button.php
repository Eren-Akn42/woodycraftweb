<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $label;

    public function __construct($type = 'submit', $label = 'Submit')
    {
        $this->type = $type;
        $this->label = $label;
    }

    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
