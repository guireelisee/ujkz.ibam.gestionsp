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
        return view('pages.types.index', compact(['typesMission','typesPersonnel','typesReunion']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.types.create');
    }

    public function show()
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

    public function edit()
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
    public function update()
    {
        //
    }

}
