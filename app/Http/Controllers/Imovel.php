<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Model\Imovel as MImovel;
use App\Http\Model\Terceirizado;
use Illuminate\Http\Response;
use Ixudra\Curl\Facades\Curl;
use Ixudra\Curl\CurlService;

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
		// $dados = json_decode($this->listaImoveis($request->id));
		// $vigilancia = Terceirizado::somaCustoTerceirizado($dados->codigo, 'VIGILANCIA');
		// $merendeira = Terceirizado::somaCustoTerceirizado($dados->codigo, 'MERENDEIRA');
		// $limpeza = Terceirizado::somaCustoTerceirizado($dados->codigo, 'LIMPEZA');
		// $curlService = new CurlService;
		$curl_handle=curl_init();

		curl_setopt($curl_handle, CURLOPT_URL,urlencode("http://localhost:2020/escola/1"));
		curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
		$query = curl_exec($curl_handle);
		dd(curl_close($curl_handle));
		curl_close($curl_handle);
		return view('escola.escola', compact('dados', 'vigilancia', 'merendeira', 'limpeza'));
	}

	public function listaImoveis(Request $request)
	{		
		$result = !empty($request->id) ? MImovel::getImovel()->find($request->id) : MImovel::getImovel()->get();
		return json_encode($result);

		// >setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);
	}
}
