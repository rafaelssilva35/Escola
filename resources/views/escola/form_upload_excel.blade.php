@extends('layouts')

@section('title', 'Page Title')

@section('content')
<div class="content">
	<form method="POST" action="{{ url('/file') }}" enctype="multipart/form-data">
	    {{ csrf_field() }}
		<div class="row">

			<div class=" col-md-3">
				<div >
					<label for="gestor">Gestor</label>
					<input type="file" class="form-control-file" id="gestor" type="file" name="gestor">
				</div>
			</div>

			<div class=" col-md-3">
				<div >
					<label for="imovel">Imoveis</label>
					<input type="file" class="form-control-file" id="imovel" type="file" name="imovel">
				</div>
			</div>

			<div class=" col-md-3">
				<div >
					<label for="repasses">Repasses</label>
					<input type="file" class="form-control-file" id="repasses" type="file" name="repasses">
				</div>
			</div>

			<div class=" col-md-3">
				<div >
					<label for="terceirizados">Terceirizados</label>
					<input type="file" class="form-control-file" id="terceirizados" type="file" name="terceirizados">
				</div>
			</div>

		</div>
		<input type="submit" name="enviar">
	</form>
</div>
@endsection