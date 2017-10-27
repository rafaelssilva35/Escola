<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Excel;
use App\Http\Model\Gestor as MGestor;

class Gestor extends Controller
{
    public function createGestor(Request $request)
    {
    	$dados = (Excel::loadExcel($request));
		$dados->each(function($arrayDados)
		{	
			MGestor::setGestor($arrayDados);
			// dd($arrayDados);			
			// foreach ($arrayDados as $key => $value) {
			// 	echo $key;
			// 	echo $value;
			// 	// print_r(json_encode($value));
			// }
		});

    }
}
