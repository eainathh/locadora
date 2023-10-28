<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locacoes extends Model
{
    use HasFactory;
    protected $table = 'locacoes';
    protected $dates = ['data_retirada','data_entrega'];
    protected $fillable =['id_user','id_filme','status','data_retirada','data_entrega'];

    protected $enumStatus= ['disponivel', 'alugado'];

   /*  public function getStatusFilme($value)
    {
        return $this->enumStatus[$value];
    }

    public function user(){
        return $this->belongsTo((User::class));
    }
    */

    // LOCACAO
    public function filme(){
        return $this->hasOne(Filme::class,'id', 'id_filme');
    }
    public function usuarios(){

        return $this->hasOne(User::class,'id', 'id_user');
    }
    public $timestamps = false;

    //DEVOLUCAO


    
}
