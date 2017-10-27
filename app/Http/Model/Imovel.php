<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $table      = 'imovel';
    protected $primaryKey = 'id_imovel';
    public  $timestamps   = false;

    public static function setImovel($arrayGestor)
    {
    	$gestor = new Imovel();
    	$gestor->codigo = $arrayGestor->codigo;
    	$gestor->codigo_mae = $arrayGestor->codigo_mae;
    	$gestor->regional = $arrayGestor->regional;
    	$gestor->cidade = $arrayGestor->cidade;
    	$gestor->inep = $arrayGestor->inep;
    	$gestor->anexo = $arrayGestor->anexo;
    	$gestor->descricao = $arrayGestor->descricao;
    	$gestor->modalidade = $arrayGestor->modalidade;
    	$gestor->situacao = $arrayGestor->situacao;
    	$gestor->educacao_infantil_presencial = $arrayGestor->educacao_infantil_presencial;
    	$gestor->anos_finais_presencial = $arrayGestor->anos_finais_presencial;
    	$gestor->ensino_medio_presencial = $arrayGestor->ensino_medio_presencial;
    	$gestor->educacao_profissional_presencial = $arrayGestor->educacao_profissional_presencial;
    	$gestor->eja_presencial = $arrayGestor->eja_presencial;
    	$gestor->eja_semipresencial = $arrayGestor->eja_semipresencial;
    	$gestor->magisterio_ead = $arrayGestor->magisterio_ead;
    	$gestor->eja_ead = $arrayGestor->eja_ead;
    	$gestor->educacao_presencial_ead = $arrayGestor->educacao_presencial_ead;
    	$gestor->total_escolarizacao = $arrayGestor->total_escolarizacao;
    	$gestor->cep = $arrayGestor->cep;
    	$gestor->logradouro = $arrayGestor->logradouro;
    	$gestor->numero = $arrayGestor->numero;
    	$gestor->bairro = $arrayGestor->bairro;
    	$gestor->data_cadastro = $arrayGestor->data_cadastro;
    	$gestor->bairro = $arrayGestor->bairro;
    	$gestor->ultima_atualizacao = $arrayGestor->ultima_atualizacao;
    	$gestor->latitude = $arrayGestor->latitude;
    	$gestor->longitude = $arrayGestor->longitude;
    	$gestor->anos_inicais_presencial = $arrayGestor->anos_inicais_presencial;
    	$gestor->educacao_profissional_ead = $arrayGestor->educacao_profissional_ead;
    	$gestor->save();
	}
	
	public function hasGestor()
	{
		return $this->hasMany('App\Http\Model\Gestor', 'codigo_imovel', 'codigo');
	}

	public function hasRepasse()
	{
		return $this->hasMany('App\Http\Model\Repasse', 'codigo_imovel', 'codigo');
	}

	public function hasTerceirizado()
	{
		return $this->hasMany('App\Http\Model\Terceirizado', 'codigo_imovel', 'codigo');
	}

	public static function getImovel()
	{
		return self::with('hasGestor', 'hasRepasse', 'hasTerceirizado')->get();
	}
}
