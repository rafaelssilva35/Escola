@extends('layouts')

@section('title', 'Page Title')



@section('content')

<div class="container"><br>
	<div class="content">
		<a href="{{url('/file/form')}}" class="btn btn-success">Enviar Arquivos</a>
		<a href="{{url('/escolas')}}" class="btn btn-success">Visualizar escolas</a>
	</div><br>
</div>
@endsection