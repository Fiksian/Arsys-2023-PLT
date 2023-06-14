<?php

namespace App\Http\Livewire\Plt\Announcement;

use Livewire\Component;
use App\Models\Plt\Announcements;

class Edit extends Component
{
    public $title, $body, $created_at;
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
        $this->created_at = $announcement->created_at;
    }

    public function update(){
        Announcements::where('id', $this->announcementId)->update([
            'title' => $this->title,
            'body' => $this->body,
            'created_at' => $this->created_at,
        ]);
        $this->emitUp('announcementEdit_Disable');

    }

}
