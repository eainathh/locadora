<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use App\Models\Locacoes;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LocacoesController extends Controller
{
    public function locarFilme (Request $request,$id){

        $data = $request->all();

       $filme = Filme::find($id);
       $filme->status = 'alugado';
       $filme->save();

       $data_retirada = Carbon::now();  
       $data_entrega = Carbon::now();
       $id_user = Auth::user()->id_user; 

       Locacoes:: create([
        'id_filme'=> $filme['id'],
        'data_retirada'=> $data_retirada->format('Y-m-d'),
        
        'id_user'=> auth()->user()->id,
        
       ]);
      
       
        return redirect()->route('home');
    }

    public function devolver (Request $request, $id){

        $data = $request->all();
        $data_entrega = Carbon::now();
        $status = 'disponivel';

        Locacoes::where('id',$id)->update([
            'data_entrega'=> $data_entrega,
            'status'=> $status,
        ]);
            
    }
}
