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
	
	public function listaImoveis()
	{
		dd(MImovel::getImovel());
		return view();
	}
}
