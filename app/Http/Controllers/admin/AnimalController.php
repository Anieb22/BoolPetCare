<?php

namespace App\Http\Controllers\Admin;

use App\Models\Animal;
use App\Models\Vaccination;
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
        $vaccinations = Vaccination::all();
        return view('admin.animals.create', compact('vaccinations'));
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
        
        $animal->fill($form_data);
        
        $animal->save();

        if($request->has('vaccination')){

            $animal->vaccinations()->attach($request->vaccination, ['vaccination_date'=>$form_data['vaccination_date']]);
        }

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
        $vaccinations = Vaccination::all();
        return view('admin.animals.edit', compact('animal', 'vaccinations'));
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
        
        $animal->update($form_data);
        if($request->has('vaccination')){
            $animal->vaccinations()->sync($request->vaccination, ['vaccination_date'=>$form_data['vaccination_date']]);
        }

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
        $animal->vaccinations()->sync([]);

        $animal->delete();
        
        return redirect()->route('admin.animals.index')->with('message', 'Animale cancellato');
    }
}
