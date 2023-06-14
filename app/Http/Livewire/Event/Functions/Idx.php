<?php

namespace App\Http\Livewire\Event\Functions;

use Livewire\Component;


class Idx extends Component
{
    public $addEvent = false;
    public $eventId = null;
    public $editEnable = false;
    
    protected $listeners = ['addEvent_Disable', 'eventEdit_Enable', 'eventEdit_Disable'];
    public function render()
    {
        return view('livewire.event.functions.idx');
    }
    public function addEvent_Enable(){
        $this->addEvent = true;
    }
    public function addEvent_Disable(){
        $this->addEvent = false;
    }
    public function eventEdit_Enable($eventId){
        $this->editEnable = true;
        $this->eventId = $eventId;
    }
    public function eventEdit_Disable(){
        $this->editEnable = false;
    }
}

