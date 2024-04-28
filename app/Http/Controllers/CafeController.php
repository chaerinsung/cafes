<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use App\Models\Favorites;
use App\Models\Comment;
use Illuminate\Http\Request;
use Auth;

class CafeController extends Controller
{
    public function home()
    {
        return view('cafes/home');
    }

    public function index() 
    {
        $cafes = Cafe::all();
        return view('cafes.index', compact('cafes'));
    }

    public function create() 
    {
        return view('cafes.create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
            'opening_hours' => 'nullable|date_format:h:i A', 
            'closing_hours' => 'nullable|date_format:h:i A|after:opening_hours',
            'parking' => 'nullable|string',
        ]);
        
        $cafe = new Cafe();
        $cafe->name = $request->input('name');
        $cafe->location = $request->input('location');
        $cafe->opening_hours = $request->input('opening_hours');
        $cafe->closing_hours = $request->input('closing_hours');
        $cafe->parking = $request->input('parking');
        $cafe->user_id = Auth::id(); 
        $cafe->save();

        return redirect()->route('cafes.index')
            ->with('success', "Cafe: {$cafe['name']} created successfully.");
    }

    public function show($id)
    {
        $cafe = Cafe::findOrFail($id);
        $user = Auth::user();

        return view('cafes.show', [
            'cafe' => $cafe,
            'user' => $user,
        ]);
    }

    public function edit($id) 
    {
        $cafe = Cafe::findOrFail($id);

        return view('cafes.edit', [
            'cafe' => $cafe, 
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
            'opening_hours' => 'nullable|date_format:h:i A', 
            'closing_hours' => 'nullable|date_format:h:i A|after:opening_hours',
            'parking' => 'nullable|string',
        ]);

        $cafe = Cafe::findOrFail($id);
        $cafe->update([
            'name' => $request->input('name'),
            'location' => $request->input('location'),
            'opening_hours' => $request->input('opening_hours'),
            'closing_hours' => $request->input('closing_hours'),
            'parking' => $request->input('parking'),
        ]);

        return redirect()->route('cafes.index')
            ->with('success', "Cafe: {$cafe['name']} updated successfully.");
    }

    public function delete($id)
    {
        $cafe = Cafe::findOrFail($id);
        $cafe->delete();

        return redirect()->route('cafes.index')
            ->with('success', "Cafe: {$cafe['name']} deleted successfully.");
    }


}