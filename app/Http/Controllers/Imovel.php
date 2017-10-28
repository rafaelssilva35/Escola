<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Model\Imovel as MImovel;
use App\Http\Model\Terceirizado;
use App\Http\Model\Repasse;

class Imovel extends Controller
{
    public function createImovel(Request $request)
    {
    	$dados = (Excel::loadExcel($request));
		$dados->each(function($arrayDados)
		{	
			MGestor::setGestor($arrayDados);
		});
	}
	
	public function exibEscola(Request $request)
	{
		$dados = json_decode($this->listaImoveis($request->id));

		$vigilancia = Terceirizado::somaCustoTerceirizado($dados->codigo, 'VIGILANCIA');
		$merendeira = Terceirizado::somaCustoTerceirizado($dados->codigo, 'MERENDEIRA');
		$limpeza = Terceirizado::somaCustoTerceirizado($dados->codigo, 'LIMPEZA');

		$manutencao = Repasse::somaRepasse($dados->codigo, 'MANUTENCAO');
		$terceiros = Repasse::somaRepasse($dados->codigo, 'PAGAMENTO TERCEIROS');
		$outros = Repasse::somaRepasse($dados->codigo, 'OUTROS');
		return view('escola.escola', compact('dados', 'vigilancia', 'merendeira', 'limpeza', 'manutencao', 'terceiros','outros'));
	}

	public function listaImoveis($id)
	{		
		$result = !empty($id) ? MImovel::getImovel()->find($id) : MImovel::getImovel()->get();
		return json_encode($result);
	}
}
