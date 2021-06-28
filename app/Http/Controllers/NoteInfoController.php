<?php

namespace App\Http\Controllers;

use App\Models\NoteInfo;
use App\Models\Personnel;
use App\Models\DestinataireNoteInfo;
use Illuminate\Http\Request;

class NoteInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = NoteInfo::all();
        $personnels = Personnel::where('statut',1)->get();
        $destinataires = DestinataireNoteInfo::all();
        return view('pages.note_info.index', compact('notes','personnels','destinataires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notes = NoteInfo::all();
        $personnels = Personnel::where('statut',1)->get();
        $destinataires = DestinataireNoteInfo::all();
        return view('pages.note_info.create', compact('notes','personnels','destinataires'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NoteInfo  $noteInfo
     * @return \Illuminate\Http\Response
     */
    public function show(NoteInfo $noteInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoteInfo  $noteInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(NoteInfo $noteInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NoteInfo  $noteInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NoteInfo $noteInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoteInfo  $noteInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoteInfo $noteInfo)
    {
        //
    }
}
