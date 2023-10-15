<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use App\Models\Locacoes;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LocacoesController extends Controller
{
    public function locarFilme (Filme $filme){
       if (auth()->check()){
       //$filme = Filme::find($id);
       $filme->status = 'alugado';
       $filme->save();

       $data_retirada = Carbon::now();
       $id_user = Auth::user()->id_user; 

       Locacoes:: create([
        'id_filme'=> $filme->id,
        'data_retirada'=> $data_retirada->format('Y-m-d'),
        'id_usuario'=> auth()->user()->id,

       ]);
    }
        return redirect()->route('home');
    }

}
