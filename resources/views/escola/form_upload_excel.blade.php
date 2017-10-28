@extends('layouts')

@section('title', 'Page Title')

@section('content')
<div class="container"><br>
	<form class="content" method="POST" action="{{ url('/file') }}" enctype="multipart/form-data">
	    {{ csrf_field() }}
		<div class="">

			<div class="row">
				<div class="card">
					<label class="blue">Gestor</label>
					<input type="file" class="form-control-file" id="gestor" type="file" name="gestor">
				</div>
			</div><br>

			<div class=" row">
				<div class="card">
					<label for="imovel" class="blue">Imoveis</label>
					<input type="file" class="form-control-file" id="imovel" type="file" name="imovel">
				</div>
			</div><br>

			<div class=" row">
				<div class="card">
					<label for="repasses" class="blue">Repasses</label>
					<input type="file" class="form-control-file" id="repasses" type="file" name="repasses">
				</div>
			</div><br>

			<div class=" row">
				<div class="card">
					<label for="terceirizados" class="blue">Terceirizados</label>
					<input type="file" class="form-control-file" id="terceirizados" type="file" name="terceirizados">
				</div>
			</div><br>

		</div>
		<input type="submit" name="enviar">
	</form>
</div>
@endsection