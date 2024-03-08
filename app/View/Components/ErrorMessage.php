<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ErrorMessage extends Component
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function render(): View|Closure|string
    {
        return view('components.error-message');
    }
}
