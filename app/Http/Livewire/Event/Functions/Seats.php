<?php

namespace App\Http\Livewire\Event\Functions;

use Livewire\Component;
use App\Models\Events\Tabel;

class Seats extends Component
{
    
    
    public function render()
    {
        $event = Tabel::all();
        return view('livewire.event.functions.seats', ['events' => $event]);
    }
}
