<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $filieres = Filiere::all();
        return view('pages.filiere.index', compact('filieres'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('pages.filiere.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        Filiere::create($request->all());
        return redirect()->route('filiere.index')->with('success','Filière ajoutée avec succès.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Filiere  $filiere
    * @return \Illuminate\Http\Response
    */
    public function show(Filiere $filiere)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Filiere  $filiere
    * @return \Illuminate\Http\Response
    */
    public function edit(Filiere $filiere)
    {
        return view('pages.filiere.edit', compact('filiere'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Filiere  $filiere
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Filiere $filiere)
    {
        $filiere->update($request->all());
        return redirect()->route('filiere.index')->with('success','Filière modifiée avec succès.');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Filiere  $filiere
    * @return \Illuminate\Http\Response
    */
    public function destroy(Filiere $filiere)
    {
        $filiere->delete();
        return redirect()->route('filiere.index')->with('success','Filière supprimée avec succès.');
    }
}
