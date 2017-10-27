<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Terceirizado extends Model
{
    protected $table      = 'terceirizados';
    protected $primaryKey = 'id_terceirizado';
    public  $timestamps   = false;

    public static function setTerceirizado($arrayGestor)
    {    	
    	$gestor = new Terceirizado();
    	$gestor->codigo_imovel = $arrayGestor->codigo_imovel;
    	$gestor->tipo = $arrayGestor->tipo;
    	$gestor->posto_trabalho = $arrayGestor->posto_trabalho;
    	$gestor->quantidade = $arrayGestor->quantidade;
    	$gestor->valor_unitario = $arrayGestor->valor_unitario;
    	$gestor->save();
    }
}
