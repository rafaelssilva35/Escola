<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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
}
