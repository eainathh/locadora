<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function genero(Request $request){

        $lista = Genero::all();
        return view('genero', compact('lista'));
    }

    public function store(Request $request){
        $genero=$request->except('_token');
        

        Genero:: create([

            'tipo'=> $genero['txtgenero']
            
        ]);
        
        return redirect()->route('genero');
    }

    public function edit($id){

        $genero = Genero::findOrFail($id);
        $lista = Genero::all();
        
        return view('generos-edit', compact('lista', 'genero'));
    }

    public function update(Request $request){

        
        Genero::findOrFail($request-> id)->update($request->all());
        return redirect()->route('genero')->with('msg', 'Evento Editado com sucesso"');

    }
}