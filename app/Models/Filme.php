<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;

    protected $fillable = [
        'capa',
        'titulo',
        'id_genero',
        'resumo'
    ];
    // ESSA FUNCAO RELACIONA O ID DO GENERO COM O FILME - 
    function generoFilme(){
        return $this->hasOne(Genero::class,'id','id_genero');
    }
}
