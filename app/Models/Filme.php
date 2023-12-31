<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;

    protected $table = "filmes";
    protected $fillable = [
        'capa',
        'titulo',
        'id_genero',
        'resumo',
        'status'
    ];
    protected $enumStatus= ['disponivel', 'alugado'];

    public function getStatusFilme($value)
    {
        return $this->enumStatus[$value];
    }

    public function locar(){
        return $this->hasMany(Locacoes::class,'id_filme', 'id');
    }



    // ESSA FUNCAO RELACIONA O ID DO GENERO COM O FILME - 
    function generoFilme(){
        return $this->hasOne(Genero::class,'id','id_genero');
    }
}
