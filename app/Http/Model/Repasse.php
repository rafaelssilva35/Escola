<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Repasse extends Model
{
    protected $table      = 'repasses';
    protected $primaryKey = 'id_repasse';
    protected $fillable   = 
    [
        'codigo_imovel',
        'tipo_repasse',
        'codigo_caixa_escolar',
        'ano_parcela',
        'nivel_ensino',
        'etapa_ensino',
        'descricao_repasse',
        'numero_parcela',
        'valor',
        'numero_processo',
        'ano_processo',
    ];
    public  $timestamps   = false;

    public static function setRepasse($arrayGestor)
    {
        try {
            $repasse = new Repasse();
            $repasse->fill($arrayGestor);
            $repasse->save();
        } catch (\PDOException $e) {
            echo 'Algum arquivo com campo errado: Repasse<br>';
        }  
    }

    public static function somaRepasse($idImovel, $tipo)
    {
        try {
            $total = "";
            $result = self::where('codigo_imovel', $idImovel)->where('tipo_repasse', $tipo)->get();
            foreach ($result as $calcular) {
                $total += $calcular->valor;
            }
            $result = ['tipo' => $tipo, 'total' => $total];
            return !empty($total) ? $result : null;
        } catch (Exception $e) {
            echo 'Erro: ',  $e->getMessage(), "\n";
        }
    }
}
