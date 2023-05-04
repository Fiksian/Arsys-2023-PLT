<?php

namespace App\Http\Livewire\Plt\Announcement;

use Livewire\Component;
use App\Models\Plt\Announcement;
use App\Models\Plt\Announcements;

class Add extends Component
{
    public $title, $body;
    public function render()
    {
        return view('livewire.plt.announcement.add');
    }

    public function save(){
        Announcements::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);
        $this->title ='';
        $this->body ='';
        $this->emit('refresh_Announcement_Lists');
    }
}
