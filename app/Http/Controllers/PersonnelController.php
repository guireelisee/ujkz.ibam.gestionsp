<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use App\Models\TitrePersonnel;
use App\Models\FonctionPersonnel;
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
        return view('pages.personnels', compact('personnels'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function edit(Personnel $personnel)
    {
        //
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
        //
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

    /**
     * Méthodes utilisateurs
     */

    public static function getPersonnelById($id)
    {
        return Personnel::where('idP',$id)->first();
    }

    public static function getPersonnelByType($id)
    {
        return Personnel::where('idTP',$id)->first();
    }

    public static function getTitreById($id)
    {

        return TitrePersonnel::where('idTitreP',$id)->first();
    }
    public static function getFonctionById($id)
    {
        return FonctionPersonnel::where('idFonctionP',$id)->first();
    }
}
