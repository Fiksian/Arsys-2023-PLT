<?php

namespace App\Http\Livewire\Event\Functions;

use Livewire\Component;
use App\Models\Events\Tabel;

class Add extends Component
{
    public $Event_Name, $Seats, $Event_Date;
    public function render()
    {
        return view('livewire.event.functions.add');
    }
    public function save(){
        Tabel::create([
            'Event_Name' => $this->Event_Name,
            'Seats' => $this->Seats,
            '$Event_Date'=> $this->Event_Date,
        ]);
        $this->Event_Name ='';
        $this->Seats ='';
        $this->Event_Date ='';
        $this->emit('refresh_Event_Lists');
    }
}

