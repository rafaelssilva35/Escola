<?php

Route::get('/', 'Home@index');
Route::post('/excel', 'Excel@loadExcel');
Route::post('/file', 'File@setFile');
Route::get('/file/form', 'File@formFileUpload');
Route::get('/escola/{id?}', 'Imovel@exibEscola');	
Route::get('/escolas', 'Escola@listaEscola');