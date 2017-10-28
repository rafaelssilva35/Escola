@extends('layouts')

@section('title', 'Page Title')

@section('content')
<div class="content">
	<table class="table">
		<thead>
			<tr>
			<th>Escola</th>			
			<th>Visualizar</th>			
			</tr>
		</thead>
		<tbody>
			@foreach($imoveis as $imovel)
			<tr>
			<td>{{$imovel->descricao}}</td>
			<td><a href="{{url('escola/'.$imovel->id_imovel)}}">visualizar</a></td>
			</tr>
			@endforeach	
		</tbody>
	</table>
</div>
@endsection
