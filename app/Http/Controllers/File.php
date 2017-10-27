<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests;
use App\Http\Model\Gestor;
use App\Http\Model\Imovel;
use App\Http\Model\Repasse;
use App\Http\Model\Terceirizado;


class File extends Controller
{
    public function setFile(Request $requests)
    {
    	\Excel::load($requests->file('gestor'), function($reader){
			$reader->each(function($arrayDados)
			{	
				Gestor::setGestor($arrayDados);
	        });
		});  

		\Excel::load($requests->file('imovel'), function($reader){
			$reader->each(function($arrayDados)
			{	
				Imovel::setImovel($arrayDados);
	        });	        
		});  

		\Excel::load($requests->file('repasses'), function($reader){
    		$reader->each(function($arrayDados)
			{	
				Repasse::setRepasse($arrayDados);
	        }); 		
		});  

		\Excel::load($requests->file('terceirizados'), function($reader){
    		$reader->each(function($arrayDados)
			{	
				Terceirizado::setTerceirizado($arrayDados);
	        });   		
		});
    }

    public function formFileUpload()
    {
    	return view('escola.form_upload_excel');
    }
}
