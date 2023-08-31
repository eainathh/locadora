<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public function filme(Request $request){
        return view('filme');
    }

    public function store(Request $request){
        $filme=$request->except('_token');

        Filme:: create([
            'capa'=> $filme['txtcapa'],
            'titulo'=> $filme['txttitulo'],
            'id_genero'=> $filme['txtid_genero'],
            'resumo'=> $filme['txtresumo']
        ]);

        return redirect()->route('genero');
    }}