<?php

namespace App\Http\Controllers;

use App\Models\Bordereau;
use App\Models\Personnel;
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
        $bordereaus = Bordereau::all();
        $personnels = Personnel::all();
        return view('pages.bordereau.index', compact('bordereaus','personnels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personnels = Personnel::all();
        return view('pages.bordereau.create', compact('personnels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $bordereau = Bordereau::create($input);
        $personnels = Personnel::all();

        return view('pages.bordereau.print', compact('bordereau','personnels'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bordereau  $bordereau
     * @return \Illuminate\Http\Response
     */
    public function show(Bordereau $bordereau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bordereau  $bordereau
     * @return \Illuminate\Http\Response
     */
    public function edit(Bordereau $bordereau)
    {
        $personnels = Personnel::all();
        return view('pages.bordereau.edit', compact('bordereau', 'personnels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bordereau  $bordereau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bordereau $bordereau)
    {
        $bordereau->update($request->all());

        $bordereau = Bordereau::where('idB', $bordereau->idB)->first();
        $personnels = Personnel::all();
        return view('pages.bordereau.print', compact('bordereau','personnels'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bordereau  $bordereau
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bordereau $bordereau)
    {
        $bordereau->delete();

        return redirect()->route('bordereau.index')->with('delete','Bordereau supprimé avec succès.');
    }

    /**
     * Méthodes utilisateurs
     */

    public function print()
    {
        $bordereau = Bordereau::where('idB',$_GET['idB'])->first();
        $personnels = Personnel::all();
        return view('pages.bordereau.print', compact('bordereau','personnels'));
    }
    
}
