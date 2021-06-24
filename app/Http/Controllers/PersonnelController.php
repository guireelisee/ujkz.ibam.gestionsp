<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use App\Models\TitrePersonnel;
use App\Models\TypePersonnel;
use App\Models\FonctionPersonnel;
use App\Models\Civilite;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnels = Personnel::all();
        $titres = TitrePersonnel::all();
        $types = TypePersonnel::all();
        $fonctions = FonctionPersonnel::all();
        $civilites = Civilite::all();
        return view('pages.personnel.index', compact('personnels','titres','fonctions','civilites','types'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function show(Personnel $personnel)
    {
        $titres = TitrePersonnel::all();
        $types = TypePersonnel::all();
        $fonctions = FonctionPersonnel::all();
        $civilites = Civilite::all();
        return view('pages.personnel.show', compact('personnel','titres','fonctions','civilites','types'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function edit(Personnel $personnel)
    {
        $titres = TitrePersonnel::all();
        $types = TypePersonnel::all();
        $fonctions = FonctionPersonnel::all();
        $civilites = Civilite::all();
        return view('pages.personnel.edit', compact('personnel','titres','fonctions','civilites','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personnel $personnel)
    {
        $personnel->update($request->all());
        return redirect()->route('personnel.index')->with('success','Personnel modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personnel  $personnel
     * @return \Illuminate\H    ttp\Response
     */
    public function destroy()
    {
        $id = $_GET['id'];
        $personnel = Personnel::where('idP',$id)->first();
        $personnel->delete();
        return redirect()->route('personnels.index')->with('success','Personnel supprimé avec succès.');
    }

}
