<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.event.home')->layout('adminlte::page');
    }
}