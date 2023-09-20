<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use App\Models\Genero;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public function filme(Request $request){
       
        $genero = Genero::all();
        $filmes = Filme::all();
        return view('filme', compact('genero', 'filmes'));
    }

    public function store(Request $request){
        $filme=$request->except('_token');
        
        Filme:: create([
            'capa'=> $filme['capa'],
            'titulo'=> $filme['titulo'],
            'id_genero'=> $filme['id_genero'],
            'resumo'=> $filme['resumo']
        ]);

        return redirect()->route('filme');
    }

    public function editFilme($id){
        $filme = Filme::findOrFail($id);
        $lista = Filme::all();
        $genero = Genero::all();

        return view('filmes-edit', compact('filme', 'lista', 'genero'));
    }

    public function updateFilme(Request $request){

        Filme::findOrFail($request-> id)->update($request->all());
        return redirect()->route('filme')->with('msg','Evento editado com sucesso');
    }

}