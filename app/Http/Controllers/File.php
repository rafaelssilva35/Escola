<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class File extends Controller
{
    public function getFile($Requests)
    {

    }

    public function formFileUpload()
    {
    	return view('escola.form_upload_excel');
    }
}
