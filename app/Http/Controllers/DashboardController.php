<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;
use App\Models\Bordereau;

class DashboardController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    function index()
    {
        $compteur_personnel= Personnel::where('statut',1)->count();
        $compteur_personnel_archive= Personnel::where('statut',0)->count();
        $compteur_bordereau = Bordereau::all()->count();
        return view('index', compact('compteur_personnel_archive','compteur_personnel','compteur_bordereau'));
    }
}
