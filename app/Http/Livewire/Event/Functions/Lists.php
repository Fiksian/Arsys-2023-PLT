<?php

namespace App\Http\Livewire\Event\Functions;

use Livewire\Component;
use App\Models\Events\Tabel;


class Lists extends Component
{
    
    protected $listeners = ['refresh_Event_Lists' => '$refresh'];
    public $search;
    public function render()
    {
        $Lists = Tabel::paginate(
            $perPage = 6, $columns = ['*'], $pageName = 'users');
        return view('livewire.event.functions.lists', compact('Lists')); //['events' => $event]);
    }
    public function refresh_Event_Lists(){
        $this->render();
    }
    public function delete($eventId){
        Tabel::find($eventId)->delete();
    }
    public function index(Request $request)
    {
        $search = $request->input('search');

        $events = Tabel::query()
            ->where('event_id', 'LIKE', "%{$search}%")
            ->get();

        return view('events.home', compact('events'));
    }
}