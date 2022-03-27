<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Families;
use App\Models\Categories;
use App\Models\Products;
use DB;
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
        $family = Families::all();
//        dd($family[0]->categories()[0]->products()[0]->id);
        return view('accueil')->with('families',$family);
    }


}