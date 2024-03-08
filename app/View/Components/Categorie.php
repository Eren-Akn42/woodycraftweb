<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Categorie extends Component
{
    public $categorie;

    public function __construct($categorie)
    {
        $this->categorie = $categorie;
    }

    public function render(): View|Closure|string
    {
        return view('components.categorie');
    }
}
