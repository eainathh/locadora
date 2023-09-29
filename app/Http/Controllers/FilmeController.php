<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use App\Models\Genero;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

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
            'resumo'=> $filme['resumo'],
            'status'=> $filme['status']
        ]);

        return redirect()->route('filme');  
    }

    public function editFilme($id){
        $filme = Filme::findOrFail($id);
        $lista = Filme::all();
        $genero = Genero::all();
        $filmes = Filme::all();

        return view('filmes-edit', compact('filme', 'lista', 'genero', 'filmes'));
    }

    public function updateFilme(Request $request){

        Filme::findOrFail($request-> id)->update($request->all());
        return redirect()->route('filme')->with('msg','Evento editado com sucesso');
    }

    public function destroy($id) 
    {

        Filme::where('id',$id)->delete();
        return redirect()->route('filme')->with('msg','Evento excluído com sucesso');
    }

    // Função para retornar os filmes de um genero especifico    
    public function buscarPorGenero(Request $request){
        $data = $request->except('_token');
        $filmes = Filme::where('id_genero',$data['generos'])->get();
        $genero = Genero::all();
        return view('buscarPorGenero', compact('filmes','genero'));
    }

}