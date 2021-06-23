<?php

namespace App\Http\Controllers;

use App\Models\TitrePersonnel;
use App\Models\TitreVisiteur;
use Illuminate\Http\Request;

class TitresController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $titresP = TitrePersonnel::all();
        $titresV = TitreVisiteur::all();
        return view('pages.titres.index', compact(['titresP','titresV']));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('pages.titres.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        if ($_POST['corps'] === "P") {
            $titreP = new TitrePersonnel;
            $titreP->intituleTitreP = request('titre');
            $titreP->save();
            return redirect()->route('titres.index')->with('success','Titre du personnel ajouté avec succès.');

        } else if ($_POST['corps'] === "V") {
            $titreV = new TitreVisiteur;
            $titreV->intituleTitreV = request('titre');
            $titreV->save();
            return redirect()->route('titres.index')->with('success','Titre du visiteur ajouté avec succès.');
            
        }
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\TitrePersonnel  $titrePersonnel
    * @return \Illuminate\Http\Response
    */
    public function show(TitrePersonnel $titrePersonnel)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\TitrePersonnel  $titrePersonnel
    * @return \Illuminate\Http\Response
    */
    public function edit(TitrePersonnel $titrePersonnel)
    {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\TitrePersonnel  $titrePersonnel
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, TitrePersonnel $titrePersonnel)
    {
        //
    }

}
