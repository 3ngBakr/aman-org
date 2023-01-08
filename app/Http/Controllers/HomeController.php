<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galary;

class HomeController extends Controller
{

    public function index()
    {
        $image=galary::all();
        return view('user.home',['image'=>$image]);
    }

  

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
}
