<?php

namespace App\Http\Livewire\Event\Functions;

use Livewire\Component;
use App\Models\Events\Tabel;

class Add extends Component
{
    public $event_id, $quota, $event_date, $application_deadline, $draft_deadline;
    public function render()
    {
        return view('livewire.event.functions.add');
    }
    public function save(){
        Tabel::create([
            'event_id' => $this->event_id,
            'quota' => $this->quota,
            'event_date'=> $this->event_date,
            'application_deadline'=> $this->application_deadline,
            'draft_deadline'=> $this->draft_deadline,
        ]);
        $this->event_id ='';
        $this->quota ='';
        $this->event_date ='';
        $this->application_deadline ='';
        $this->draft_deadline ='';
        $this->emit('refresh_Event_Lists');
    }
}

