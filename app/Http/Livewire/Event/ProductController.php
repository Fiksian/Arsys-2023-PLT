<?php

namespace App\Http\Livewire\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plt\Announcements;

class ProductController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $products = Announcements::where('name', 'LIKE', "%{$keyword}%")->get();
        
        return view('search', compact('products', 'keyword'));
    }
}