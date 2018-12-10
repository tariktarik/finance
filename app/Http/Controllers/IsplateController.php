<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Uplate;
use App\Isplate;
use Auth;




class IsplateController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
   
     
    public function index()
    {
        $ukuplate = Uplate::sum('iznos');
        $ukisplate = Isplate::sum('iznos');
        $ocekusteda = $ukuplate * 0.25; 
        $stanje = $ukuplate - (-$ukisplate);
        
        $isplate = Isplate::all()->sortByDesc('id')->take(20);


        return view('isplate.index', compact('isplate','stanje'));
    }

    public function trosak($id)
    {
        
        $isplate = Isplate::where('potrosio_id', $id)->get()->sortByDesc('id');


        return view('isplate.trosak', compact('isplate'));
    }

    public function mjesec()
    {

        $dateS = new Carbon('2017-06-01');
        $dateE = new Carbon('2017-06-10');
        $result = Isplate::whereBetween('created_at', [$dateS->format('Y-m-d')." 00:00:00", $dateE->format('Y-m-d')." 23:59:59"])->get();
        //Trenutni mjesec: $trenutno = Isplate::where('created_at', '>=', Carbon::now()->startOfMonth())->get(); 
        $isplate = Isplate::where('created_at')->get()->sortByDesc('id');


        return view('isplate.mjesec', compact('isplate', 'result'));
    }

    
    public function create()

    {
    	 return view('isplate.create');

    }

    public function store()

    {
    	$isplate =  new Isplate;

    	$isplate->opis = request('opis');
    	$isplate->iznos = request('iznos'); 
    	$isplate->potrosio_id = request('potrosio');
        
    	$isplate->save();

    	return redirect ('/isplate');

    }

    
}
