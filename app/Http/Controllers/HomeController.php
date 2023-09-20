<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers; 

use Auth; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class maincontroller extends Controller 
{ 
    public function home(Request $request)
    { 
        if(FacadesAuth::Attempt($request->only('email','password'))) { 
            return redirect('/'); 
        }
    }
}

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
    public function index()
    {
        return view('home');
    }
}
