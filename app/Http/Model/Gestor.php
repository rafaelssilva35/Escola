<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Gestor extends Model
{
    protected $table      = 'gestor';
    protected $primaryKey = 'id_gestor';
    public  $timestamps   = false;

    public static function setGestor($arrayGestor)
    {    	
    	$gestor = new Gestor();
    	$gestor->codigo_imovel = $arrayGestor->codigo_imovel;
    	$gestor->tipo_eleito = $arrayGestor->tipo_eleito;
    	$gestor->cargo = $arrayGestor->cargo;
    	$gestor->situacao_cargo = $arrayGestor->situacao_cargo;
    	$gestor->matricula = $arrayGestor->matricula;
    	$gestor->nome = $arrayGestor->nome;
    	$gestor->cpf = $arrayGestor->cpf;
    	$gestor->telefone = $arrayGestor->telefone;
    	$gestor->celular = $arrayGestor->celular;
    	$gestor->celular2 = $arrayGestor->celular2;
    	$gestor->email = $arrayGestor->email;
    	$gestor->save();
    }
}
