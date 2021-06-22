<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        function index()
    {
        return view('index');
    }

}
