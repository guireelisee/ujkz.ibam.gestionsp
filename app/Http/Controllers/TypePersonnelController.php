<?php

namespace App\Http\Controllers;

use App\Models\TypePersonnel;
use App\Models\Personnel;
use Illuminate\Http\Request;

class TypePersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public static function getTypePersonnel($id)
    {
        return Personnel::where('idTP',$id)->first();
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
     * @param  \App\Models\TypePersonnel  $typePersonnel
     * @return \Illuminate\Http\Response
     */
    public function show(TypePersonnel $typePersonnel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypePersonnel  $typePersonnel
     * @return \Illuminate\Http\Response
     */
    public function edit(TypePersonnel $typePersonnel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypePersonnel  $typePersonnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypePersonnel $typePersonnel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypePersonnel  $typePersonnel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypePersonnel $typePersonnel)
    {
        //
    }
}
