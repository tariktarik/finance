<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uplate;
use App\Isplate;

class UplateController extends Controller
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
        
        $uplate = Uplate::all()->sortByDesc('id');


        return view('uplate.index', compact('uplate','stanje'));
    }

    public function uplata($id)
    {
        
        $uplate = Uplate::where('uplatio_id', $id)->get()->sortByDesc('id');


        return view('uplate.uplata', compact('uplate'));
    }

    

    public function create()
    {
    	return view('uplate.create');
    }

   public function store()

    {
    	$uplate =  new Uplate;

    	$uplate->opis = request('opis');
    	$uplate->iznos = request('iznos');
        $uplate->uplatio_id = request('uplatio');

    	$uplate->save();

    	return redirect ('/uplate');

    }


}
