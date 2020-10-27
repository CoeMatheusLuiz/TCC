<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    protected $fillable = [
        'nome', 'descricao', 'preco', 'imagem', 'tipo', 'linha',
    ];


    public function getPrecoAttribute($valor){
        
        //$novaForma = "$ ".$valor;
        return $valor;
    }

}


























