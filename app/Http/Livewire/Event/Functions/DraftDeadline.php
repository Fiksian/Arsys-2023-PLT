<?php

namespace App\Http\Livewire\Event\Functions;

use Livewire\Component;
use App\Models\Events\Tabel;
class DraftDeadline extends Component
{
    public function render()
    {
        $event = Tabel::all();
        return view('livewire.event.functions.draft-deadline', ['events' => $event]);
    }
}
