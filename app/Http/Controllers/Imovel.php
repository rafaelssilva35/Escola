<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Model\Imovel as MImovel;

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
	
	public function exibEscola()
	{
		return view('escola.escola');
	}

	public function listaImoveis(Request $request)
	{
		if ($request->ajax()) {
			return MImovel::getImovel();
		}
	}
}
