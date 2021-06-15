<?php

namespace App\Http\Controllers;

use App\Models\TitrePersonnel;
use App\Models\TitreVisiteur;
use Illuminate\Http\Request;

class TitreController extends Controller
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
        return view('pages.titre', compact(['titresP','titresV']));
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
        if ($_POST['corps'] === "P") {
            $titreP = new TitrePersonnel;
            $titreP->intituleTitreP = request('titre');
            $titreP->save();
            return redirect()->route('titre.index')->with('success','Titre du personnel ajouté avec succès.');
        } else if ($_POST['corps'] === "V") {
            $titreV = new TitreVisiteur;
            $titreV->intituleTitreV = request('titre');
            $titreV->save();
            return redirect()->route('titre.index')->with('success','Titre du visiteur ajouté avec succès.');
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

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\TitrePersonnel  $titrePersonnel
    * @return \Illuminate\Http\Response
    */
    public function destroyP()
    {
        $id = $_GET['id'];
        $titrePersonnel = TitrePersonnel::where('idTitreP',$id)->first();
        $titrePersonnel->delete();
        return redirect()->route('titre.index')->with('success','Titre supprimé avec succès.');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\TitreVisiteur  $titreVisiteur
    * @return \Illuminate\Http\Response
    */
    public function destroyV()
    {
        $id = $_GET['id'];
        $titreVisiteur = TitreVisiteur::where('idTitreV',$id)->first();
        $titreVisiteur->delete();
        return redirect()->route('titre.index')->with('success','Titre supprimé avec succès.');
    }
}
