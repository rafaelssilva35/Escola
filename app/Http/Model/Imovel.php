<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $table      = 'imovel';
    protected $primaryKey = 'id_imovel';
    protected $fillable   = 
    [
        'codigo',
        'codigo_mae',
        'regional',
        'cidade',
        'inep',
        'anexo',
        'descricao',
        'modalidade',
        'situacao',
        'educacao_infantil_presencial',
        'anos_finais_presencial',
        'ensino_medio_presencial',
        'educacao_profissional_presencial',
        'eja_presencial',
        'eja_semipresencial',
        'magisterio_ead',
        'eja_ead',
        'educacao_presencial_ead',
        'total_escolarizacao',
        'cep',
        'logradouro',
        'numero',
        'bairro',
        'data_cadastro',
        'bairro',
        'ultima_atualizacao',
        'latitude',
        'longitude',
        'anos_inicais_presencial',
        'educacao_profissional_ead'
    ];
    public  $timestamps   = false;

    public static function setImovel($arrayGestor)
    {
        try {
            $imovel = new Imovel();
            $imovel->fill($arrayGestor);        
            $imovel->save();
        } catch (\PDOException $e) {
            echo 'Algum arquivo com campo errado: Imovel<br>';
        }  
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
		return self::with('hasGestor', 'hasRepasse', 'hasTerceirizado');
	}
}
