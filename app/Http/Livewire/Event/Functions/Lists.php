<?php

namespace App\Http\Livewire\Event\Functions;

use Livewire\Component;
use App\Models\Events\Tabel;

class Lists extends Component
{
    
    protected $listeners = ['refresh_Event_Lists' => '$refresh'];

    public function render()
    {
        $event = Tabel::all();
        return view('livewire.event.functions.lists', ['events' => $event]);
    }
    public function refresh_Event_Lists(){
        $this->render();
    }
    public function delete($eventId){
        Tabel::find($eventId)->delete();
    }
}