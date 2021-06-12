<?php

namespace App\Http\Controllers;

use App\Models\Bordereau;
use Illuminate\Http\Request;

class BordereauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.bordereau');
    }

    public function printBordereau()
    {
        return view('prints.printBordereau');
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
     * @param  \App\Models\Bordereau  $Bordereau
     * @return \Illuminate\Http\Response
     */
    public function show(Bordereau $Bordereau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bordereau  $Bordereau
     * @return \Illuminate\Http\Response
     */
    public function edit(Bordereau $Bordereau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bordereau  $Bordereau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bordereau $Bordereau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bordereau  $Bordereau
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bordereau $Bordereau)
    {
        //
    }
}
