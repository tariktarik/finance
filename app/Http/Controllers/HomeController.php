<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uplate;
use App\Isplate;


class HomeController extends Controller
{
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $ukuplate = Uplate::sum('iznos');
        $ukisplate = Isplate::sum('iznos');
        $ocekusteda = $ukuplate * 0.25; 
        $stanje = $ukuplate - (-$ukisplate);
        return view('home', compact('ocekusteda','ukuplate', 'ukisplate', 'stanje'));
    }

    
}
