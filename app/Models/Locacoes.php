<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locacoes extends Model
{
    use HasFactory;
    protected $dates = ['data_locacao','data_fim'];
    protected $fillable =['id_user','id_filme','status','data_locacao','data_fim'];

    protected $enumStatus= ['disponivel', 'alugado'];

    public function getStatusFilme($value)
    {
        return $this->enumStatus[$value];
    }

    public function user(){
        return $this->belongsTo((User::class));
    }
    

    // LOCACAO
    public function filme(){
        return $this->hasOne(Filme::class,'id', 'id_filme');
    }
    public function usuarios(){

        return $this->hasOne(User::class,'id', 'id_user');
    }
    public $timestamps = false;

}
