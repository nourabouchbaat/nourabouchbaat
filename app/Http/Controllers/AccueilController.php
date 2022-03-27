<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Families;
use App\Models\Categories;
use App\Models\Products;
use App\Models\AccueilSlide;
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
        $topSlides = AccueilSlide::all();
        return view('accueil')->with('families',$family)
                                ->with('topSlides',$topSlides);
    }


}