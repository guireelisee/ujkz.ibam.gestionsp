<?php

namespace App\Http\Controllers;

use App\Models\FonctionPersonnel;
use App\Models\FonctionVisiteur;
use Illuminate\Http\Request;

class FonctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fonctionsP = FonctionPersonnel::all();
        $fonctionsV = FonctionVisiteur::all();
        return view('pages.fonctions', compact(['fonctionsP','fonctionsV']));
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
            $fonctionP = new FonctionPersonnel;
            $fonctionP->intituleFonctionP = request('fonction');
            $fonctionP->save();
            return redirect()->route('fonctions.index')->with('success','Fonction du personnel ajoutée avec succès.');
        } else if ($_POST['corps'] === "V") {
            $fonctionV = new FonctionVisiteur;
            $fonctionV->intituleFonctionV = request('fonction');
            $fonctionV->save();
            return redirect()->route('fonctions.index')->with('success','Fonction du visiteur ajoutée avec succès.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FonctionPersonnel  $fonctionPersonnel
     * @return \Illuminate\Http\Response
     */
    public function show(FonctionPersonnel $fonctionPersonnel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FonctionPersonnel  $fonctionPersonnel
     * @return \Illuminate\Http\Response
     */
    public function edit(FonctionPersonnel $fonctionPersonnel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FonctionPersonnel  $fonctionPersonnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FonctionPersonnel $fonctionPersonnel)
    {
        //
    }

        /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\FonctionPersonnel  $fonctionPersonnel
    * @return \Illuminate\Http\Response
    */
    public function destroyP()
    {
        $id = $_GET['id'];
        $fonctionPersonnel = FonctionPersonnel::where('idFonctionP',$id)->first();
        $fonctionPersonnel->delete();
        return redirect()->route('fonctions.index')->with('success','Fonction supprimée avec succès.');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\FonctionVisiteur  $fonctionVisiteur
    * @return \Illuminate\Http\Response
    */
    public function destroyV()
    {
        $id = $_GET['id'];
        $fonctionVisiteur = FonctionVisiteur::where('idFonctionV',$id)->first();
        $fonctionVisiteur->delete();
        return redirect()->route('fonctions.index')->with('success','Fonction supprimée avec succès.');
    }
}
