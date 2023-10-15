<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers; 
use App\Models\Filme;
use App\Models\Genero;

use Auth; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){
       
        $genero = Genero::all();
        $filmes = Filme::all();
        return view('home', compact('genero', 'filmes'));
    }

    
}
