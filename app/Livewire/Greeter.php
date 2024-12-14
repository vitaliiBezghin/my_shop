<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component
{
    public $name = '';
    public $greeting = '';
    public function render()
    {
        return view('livewire.greeter');
    }

    public function changeName()
    {

    }
}
