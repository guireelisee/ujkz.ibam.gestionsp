<?php

namespace App\Http\Controllers;

use App\Models\TypeMission;
use App\Models\TypePersonnel;
use App\Models\TypeReunion;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typesMission = TypeMission::all();
        $typesPersonnel = TypePersonnel::all();
        $typesReunion = TypeReunion::all();
        return view('pages.types', compact(['typesMission','typesPersonnel','typesReunion']));
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
            $typesPersonnel = new TypePersonnel;
            $typesPersonnel->intituleTP = request('type');
            $typesPersonnel->save();
            return redirect()->route('types.index')->with('success','Type du personnel ajouté avec succès.');
        } else if ($_POST['corps'] === "M") {
            $typesMission = new TypeMission;
            $typesMission->intituleTM = request('type');
            $typesMission->save();
            return redirect()->route('types.index')->with('success','Type de mission ajouté avec succès.');
        } else if ($_POST['corps'] === "R") {
            $typesReunion= new TypeReunion;
            $typesReunion->intituleTR = request('type');
            $typesReunion->save();
            return redirect()->route('types.index')->with('success','Type de la réunion ajouté avec succès.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeMission  $typeMission
     * @return \Illuminate\Http\Response
     */
    public function show(TypeMission $typeMission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeMission  $typeMission
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeMission $typeMission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeMission  $typeMission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeMission $typeMission)
    {
        //
    }

        /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\TypePersonnel  $typePersonnel
    * @return \Illuminate\Http\Response
    */
    public function destroyP()
    {
        $id = $_GET['id'];
        $typePersonnel = TypePersonnel::where('idTP',$id)->first();
        $typePersonnel->delete();
        return redirect()->route('types.index')->with('success','Type supprimé avec succès.');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\TypeReunion  $typeReunion
    * @return \Illuminate\Http\Response
    */
    public function destroyR()
    {
        $id = $_GET['id'];
        $typeReunion = TypeReunion::where('idTR',$id)->first();
        $typeReunion->delete();
        return redirect()->route('types.index')->with('success','Type supprimé avec succès.');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\TypeMission  $typeMission
    * @return \Illuminate\Http\Response
    */
    public function destroyM()
    {
        $id = $_GET['id'];
        $typeMission = TypeMission::where('idTM',$id)->first();
        $typeMission->delete();
        return redirect()->route('types.index')->with('success','Type supprimé avec succès.');
    }
}
