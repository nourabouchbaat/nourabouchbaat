<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    /**
     * Create a new Controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     //   $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        return view('accueil');
    }
}



}