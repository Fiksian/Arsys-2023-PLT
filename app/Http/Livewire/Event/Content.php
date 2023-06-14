<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;


class Content extends Component
{
    public $content = null;
    protected $listeners = ['setMenu_Event'];
    public function render()
    {
        return view('livewire.event.content');
    }

    public function setMenu_Event($selection){
        $this->content = $selection;
    }
    public function setMenu($selection){
        $this->emit('setMenu_Event', $selection);
    }
}
