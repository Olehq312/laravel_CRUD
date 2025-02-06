<?php

namespace App\Http\Controllers;

use App\Models\Boots;
use Illuminate\Http\Request;

class BootsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boots = Boots::latest()->paginate(4);

        return view('boots.index', compact('boots'))
            ->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('boots.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
           'name' => 'required',
           'description' => 'required',
           'brand' => 'required',
       ]);

       
       Boots::create($request->all());

       return redirect()->route('boots.index')
           ->with('success', 'Boots post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Boots $boot)
    {
        return view('boots.show', compact('boot'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Boots $boot)
    {
        return view('boots.edit', compact('boot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Boots $boot)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'brand' => 'required',
        ]);
 
        
        $boot->update($request->all());
 
        return redirect()->route('boots.index')
            ->with('success', 'Boots post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Boots $boot)
    {
        $boot->delete();

        return redirect()->route('boots.index')
            ->with('success', 'Boots post deleted successfully.');
    }
}
