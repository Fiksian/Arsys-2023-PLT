<?php

namespace App\Http\Livewire\Event\Functions;

use Livewire\Component;
use App\Models\Events\Tabel;

class Edit extends Component
{
    public $Event_Name, $Seats, $Event_Date, $Application_Deadline, $Draft_Deadline;
    public $eventId;
    public function render()
    {
    
        return view('livewire.event.functions.edit');
    }

    public function mount($eventId){
        $this->eventId = $eventId;
        $event = Tabel::where('id', $eventId)->first();
        $this->Event_Name = $event->Event_Name;
        $this->Seats = $event->Seats;
        $this->Event_Date = $event->Event_Date;
        $this->Application_Deadline = $event->Application_Deadline;
        $this->Draft_Deadline = $event->Draft_Deadline;
        
    }

    public function update(){
        Tabel::where('id', $this->eventId)->update([
            'Event_Name' => $this->Event_Name,
            'Seats' => $this->Seats,
            'Event_Date' => $this->Event_Date,
            'Application_Deadline' => $this->Application_Deadline,
            'Draft_Deadline' => $this->Draft_Deadline,
        ]);
        $this->emitUp('eventEdit_Disable');

    }

}
