<?php

namespace App\Http\Controllers;

use App\Models\Filme;
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
        
        return redirect()->route('genero')->with('msg', 'Gênero criado com sucesso');
    }

    public function edit($id){

        $genero = Genero::findOrFail($id);
        $lista = Genero::all();
        
        return view('generos-edit', compact('lista', 'genero'));
    }

    public function update(Request $request){

        
        Genero::findOrFail($request-> id)->update($request->all());
        return redirect()->route('genero')->with('msg', 'Gênero editado com sucesso');

    }

    public function destroyg($id) 
    {
        $filmes = Filme::where('id_genero',$id)->count();
        if($filmes == 0) {
            Genero::where('id',$id)->delete(); 
        } else{
            return redirect()->route('genero')->with('msg','Existem filmes nessa categoria');    
        }
         return redirect()->route('genero')->with('msg','Gênero excluído com sucesso');
    }
}