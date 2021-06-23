<?php

namespace App\Http\Controllers;

use App\Models\Ampliation;
use Illuminate\Http\Request;

class AmpliationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ampliations = Ampliation::all();
        return view('pages.ampliation.index', compact('ampliations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.ampliation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ampliation::create($request->all());
        return redirect()->route('ampliation.index')->with('success','Ampliation ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ampliation  $ampliation
     * @return \Illuminate\Http\Response
     */
    public function show(Ampliation $ampliation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ampliation  $ampliation
     * @return \Illuminate\Http\Response
     */
    public function edit(Ampliation $ampliation)
    {
        return view('pages.ampliation.edit', compact('ampliation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ampliation  $ampliation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ampliation $ampliation)
    {
        $ampliation->update($request->all());
        return redirect()->route('ampliation.index')->with('success','Ampliation modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ampliation  $ampliation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ampliation $ampliation)
    {
        $ampliation->delete();
        return redirect()->route('ampliation.index')->with('delete','Ampliation supprimée avec succès.');
    }
}
