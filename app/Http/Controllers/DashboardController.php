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
        $compteur_bordereau = DashboardController::compteur_bordereau();
        return view('index', compact('compteur_bordereau'));
    }


    public function compteur_bordereau()
    {
        return Bordereau::all()->count();
    }

}
