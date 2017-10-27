<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Excel extends Controller
{
    public static function loadExcel($fileExcel)
    {    	
    	$dados = "";
    	return \Excel::load($fileExcel->file('excel'), function($reader){
    		
		});
		// return $dadsos;
    }
}
			// $reader->each(function($arrayDados)
    		// {
    		// 	echo "<br>";
    		// 	var_dump($arrayDados);
    		// 	// dd($arrayDados);
    		// 	// foreach ($arrayDados as $key => $value) {
    		// 	// 	echo "  /  ";
    		// 	// 	print_r(json_encode($value));
    		// 	// }
    		// });
    		// rad2deg(number)eader methods