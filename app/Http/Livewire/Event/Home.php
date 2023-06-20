<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;
use App\Models\Events\Tabel;
class Home extends Component
{
    public function render()
    {
        return view('livewire.event.home')->layout('adminlte::page');
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