@extends('layouts')

@section('title', 'Page Title')

@section('content')
<div class=" ">

    <!-- Post Content Column -->
    <div class="col-lg-10" style="">

        <!-- Title -->
        <h1 class="mt-4">{{$dados->descricao}}</h1>

        <hr>

        <!-- Date/Time -->
        <p>Código Inep:{{$dados->inep}}</p>
        <p>CNPJ:115455214521</p>

        <a>Status Escola</a>
        <button class="btn btn-success" >{{$dados->situacao  }}</button>

        <hr>

        <!-- Preview Image -->
        <div class="content card">   
            <div class="row">                
                <span class="col-md-4"> <p class="green">Endereço:</p> {{$dados->logradouro}}</span>    
                <span class="col-md-4"> <p class="green">Bairro:</p> {{$dados->bairro}}</span>
                <span class="col-md-4"> <p class="green">CEP:</p> {{$dados->cep}} </span>
            </div><br>
            
            <div class="row">
                <span class="col-md-4"> <p class="green">Localidade:</p> {{$dados->cidade}}</span>
                <span class="col-md-4"> <p class="green">Telefone:</p> {{$dados->logradouro}}</span>
                <span class="col-md-4"> <p class="green">Registro:</p> zxxx   </span>
            </div><br>

            <div class="row">                
                <span class="col-md-4"> <p class="green">Dados do imóvel:</p>alugado</span>
                <span class="col-md-4"> <p class="green">Tipo de Escola:</p></span>
                <span class="col-md-4"> <p class="green">Tipo de Encino:</p><br>{{$dados->modalidade}}</span>
            </div>

        </div>

        <hr>
        <div class="content">   
            <h3>Dados do Gestor</h3>
            <div class="row">                
                <span class="col-md-4"> <p class="blue">Nome:</p>{{($dados->has_gestor[0]->nome)}}</span>    
                <span class="col-md-4"> <p class="blue">Tipo:</p>{{$dados->has_gestor[0]->cargo}}</span>
                <span class="col-md-4"> <p class="blue">Email:</p>{{$dados->has_gestor[0]->email}} </span>
            </div><br>
            
            <div class="row">
                <span class="col-md-4"> <p class="blue">Telefone:</p>{{$dados->has_gestor[0]->celular}}</span>
                <span class="col-md-4"> <p class="blue"> Forma da Eleição:</p>{{$dados->has_gestor[0]->tipo_eleito}}</span>
            </div><br>
        </div>

        <hr>

        <!-- Post Content -->
        <h3>Dados da Sala Fora</h3>
            <table>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Localidade</th>
                <th>Status</th>
                <th>Gestor Auxiliar</th>
            </table>
        <hr>
        <hr>

        <!-- Post Content -->
        <h3>Financeiro</h3>
        <h3>Contrato</h3>
        <div class="content card">
            <div class="row">                
                <span class="col-md-4"> <p class="blue"> {{$vigilancia['tipo']}} </p>{{($vigilancia['total'])}}</span>    
                <span class="col-md-4"> <p class="blue"> {{$merendeira['tipo']}} </p>{{($merendeira['total'])}}</span>
                <span class="col-md-4"> <p class="blue"> {{$limpeza['tipo']}} </p>{{($limpeza['total'])}}</span>
            </div><br>
        </div>
        <span>Repasses</span>
        <hr>

        <hr>
       

    </div> 
</div>
@endsection
