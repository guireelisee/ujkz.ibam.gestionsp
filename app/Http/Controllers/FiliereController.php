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
        return view('pages.filieres', compact('filieres'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //
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
        return redirect()->route('filieres.index')->with('success','Filière ajoutée avec succès.');
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
        //
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
        //
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
        return redirect()->route('filieres.index')->with('success','Filière supprimée avec succès.');
    }
}
