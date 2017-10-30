<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Terceirizado extends Model
{
    protected $table      = 'terceirizados';
    protected $primaryKey = 'id_terceirizado';
    protected $fillable   = ['codigo_imovel','tipo','posto_trabalho','quantidade','valor_unitario'];
    public  $timestamps   = false;

    public static function setTerceirizado($arrayGestor)
    {    	
        try {
            $gestor = new Terceirizado();
            $gestor->fill($arrayGestor);
            $gestor->save();
        } catch (\PDOException $e) {
            echo 'Algum arquivo com campo errado: Terceirizados<br>';
        }    	
    }

    public static function somaCustoTerceirizado($idImovel, $tipo)
    {
        try {
            $total = 0;
            $result = self::where('codigo_imovel', $idImovel)->where('tipo', $tipo)->get();
            foreach ($result as $calcular) {
                // var_dump((double) $calcular->quantidade);
                // echo "<br>";
                // var_dump((double) $calcular->valor_unitario);
                $total += $calcular->quantidade * $calcular->valor_unitario;
            }
            $result = ['tipo' => $tipo, 'total' => $total];
            return !empty($total) ? $result : null;
        } catch (Exception $e) {
            echo 'Erro: ',  $e->getMessage(), "\n";
        }
    }
}
