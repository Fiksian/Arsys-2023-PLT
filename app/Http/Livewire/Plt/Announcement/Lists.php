<?php

namespace App\Http\Livewire\Plt\Announcement;

use Livewire\Component;
use App\Models\Plt\Announcements;

class Lists extends Component
{
    protected $listeners = ['refresh_Announcement_Lists' => '$refresh'];
    public function render()
    {
        $announcement = Announcements::all();
        return view('livewire.plt.announcement.lists', ['announcements' => $announcement]);
    }

    public function refresh_Announcement_Lists(){
        $this->render();
    }

    public function delete($announcementId){
        Announcements::find($announcementId)->delete();
    }
}
