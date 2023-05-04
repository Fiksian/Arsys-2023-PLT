<?php

namespace App\Http\Livewire\Plt\Announcement;

use Livewire\Component;
use App\Models\Plt\Announcements;

class Edit extends Component
{
    public $title, $body;
    public $announcementId;
    public function render()
    {
        return view('livewire.plt.announcement.edit');
    }

    public function mount($announcementId){
        $this->announcementId = $announcementId;
        $announcement = Announcements::where('id', $announcementId)->first();
        $this->title = $announcement->title;
        $this->body =$announcement->body;
    }

    public function update(){
        Announcements::where('id', $this->announcementId)->update([
            'title' => $this->title,
            'body' => $this->body,
        ]);
        $this->emitUp('announcementEdit_Disable');

    }

}
