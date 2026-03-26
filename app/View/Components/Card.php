<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $voceMenu;

    public function __construct($voceMenu)
    {
        $this->voceMenu = $voceMenu;
    }

    public function render()
    {
        return view('components.card');
    }
}
