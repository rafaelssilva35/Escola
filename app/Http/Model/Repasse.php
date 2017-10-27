<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Repasse extends Model
{
    protected $table      = 'repasses';
    protected $primaryKey = 'id_repasse';
    public  $timestamps   = false;

    public static function setGestor($arrayGestor)
    {    	
    	$gestor = new Gestor();
    	$gestor->codigo_imovel = $arrayGestor->codigo_imovel;
    	$gestor->tipo_repasse = $arrayGestor->tipo_repasse;
    	$gestor->codigo_caixa_escolar = $arrayGestor->codigo_caixa_escolar;
    	$gestor->ano_parcela = $arrayGestor->ano_parcela;
    	$gestor->nivel_ensino = $arrayGestor->nivel_ensino;
    	$gestor->etapa_ensino = $arrayGestor->etapa_ensino;
    	$gestor->descricao_repasse = $arrayGestor->descricao_repasse;
    	$gestor->numero_parcela = $arrayGestor->numero_parcela;
    	$gestor->valor = $arrayGestor->valor;
    	$gestor->numero_processo = $arrayGestor->numero_processo;
    	$gestor->ano_processo = $arrayGestor->ano_processo;
    	$gestor->save();
    }
}
