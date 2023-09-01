<?php

namespace App\Http\Controllers\Admin;

use App\Models\Animal;
use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;
use App\Http\Controllers\Controller;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();
        return view('admin.animals.index', compact('animals'));

    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.animals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnimalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnimalRequest $request)
    {
        $form_data = $request->all();

        $animal = new Animal();
        $animal->name = $form_data['name'];
        $animal->specie = $form_data['specie'];
        $animal->date_of_birth = $form_data['date_of_birth'];
        $animal->genre = $form_data['genre'];
        $animal->owner = $form_data['owner'];
        $animal->note = $form_data['note'];        
        
        $animal->save();

        return redirect()->route('admin.animals.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        return view('admin.animals.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        return view('admin.animals.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnimalRequest  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnimalRequest $request, Animal $animal)
    {
        $form_data = $request->all();

        // $animal->name = $form_data['name'];
        // $animal->specie = $form_data['specie'];
        // $animal->date_of_birth = $form_data['date_of_birth'];
        // $animal->genre = $form_data['genre'];
        // $animal->owner = $form_data['owner'];
        // $animal->note = $form_data['note'];        
        
        $animal->update($form_data);

        return redirect()->route('admin.animals.index', $animal->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('admin.animals.index');
    }
}
