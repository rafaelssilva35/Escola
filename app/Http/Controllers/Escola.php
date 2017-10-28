<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Model\Imovel;

class Escola extends Controller
{
	public function listaEscola()
	{
		$imoveis = Imovel::all();
		return view('escola.escola_lista', compact('imoveis'));
	}
}
