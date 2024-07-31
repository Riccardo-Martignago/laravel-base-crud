<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::all();
        return view('animals.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
                'name' => ['required', 'string', 'max:50'],
                'species' => ['required', 'string', 'max:50'],
                'age' => ['required', 'integer', 'min:0'],
            ]);

            $newAnimal = Animal::create($data);

        return redirect()->route('animals.show', $newAnimal);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        return view('animals.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        return view('animals.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'species' => ['required', 'string', 'max:50'],
            'age' => ['required', 'integer', 'min:0'],
        ]);

        $animal->update($data);
        return redirect()->route('animals.show', $animal);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('animals.index');
    }
}
