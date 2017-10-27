<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Terceirizado extends Controller
{
    public function createTerceirizado(Request $request)
    {
    	$dados = (Excel::loadExcel($request));
		$dados->each(function($arrayDados)
		{	
			MGestor::setGestor($arrayDados);
		});
    }
}
