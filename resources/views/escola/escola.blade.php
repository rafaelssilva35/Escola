@extends('layouts')

@section('title', 'Page Title')

@section('content')
<div class="content offset-md-2">

    <!-- Post Content Column -->
    <div class="col-lg-10" style="">

        <!-- Title -->
        <h1 class="mt-4">{{$dados->descricao}}</h1>

        <hr>

        <div class="row">             
            <span class="col-md-4">                
                Código Inep:{{$dados->inep}}
                CNPJ:115455214521            
            </span>  

            <span class="col-md-3 offset-md-5">
                <a>Status Escola</a>
                <button class="btn btn-success" >{{$dados->situacao  }}</button>
            </span>
            
        </div>

        <hr>

        <!-- Preview Image -->
        <div class="content card justify-content-center">   
            <div class="row offset-md-2">                
                <span class="col-md-4"> <p class="green">Endereço:</p> {{$dados->logradouro}}</span>    
                <span class="col-md-4"> <p class="green">Bairro:</p> {{$dados->bairro}}</span>
                <span class="col-md-4"> <p class="green">CEP:</p> {{$dados->cep}} </span>
            </div><br>
            
            <div class="row offset-md-2">
                <span class="col-md-4"> <p class="green">Localidade:</p> {{$dados->cidade}}</span>
                <span class="col-md-4"> <p class="green">Telefone:</p> {{$dados->logradouro}}</span>
                <span class="col-md-4"> <p class="green">Registro:</p> zxxx   </span>
            </div><br>

            <div class="row offset-md-2">                
                <span class="col-md-4"> <p class="green">Dados do imóvel:</p>alugado</span>
                <span class="col-md-4"> <p class="green">Tipo de Escola:</p></span>
                <span class="col-md-4"> <p class="green">Tipo de Encino:</p><br>{{$dados->modalidade}}</span>
            </div>

        </div>

        <hr>
        <div class="content">   
            <h3 class="row offset-md-2">Dados do Gestor</h3>
            <div class="row offset-md-2">                
                <span class="col-md-4"> <p class="blue">Nome:</p>{{($dados->has_gestor[0]->nome)}}</span>    
                <span class="col-md-4"> <p class="blue">Tipo:</p>{{$dados->has_gestor[0]->cargo}}</span>
                <span class="col-md-4"> <p class="blue">Email:</p>{{$dados->has_gestor[0]->email}} </span>
            </div><br>
            
            <div class="row offset-md-2">
                <span class="col-md-4"> <p class="blue">Telefone:</p>{{$dados->has_gestor[0]->celular}}</span>
                <span class="col-md-4"> <p class="blue"> Forma da Eleição:</p>{{$dados->has_gestor[0]->tipo_eleito}}</span>
            </div><br>
        </div>

        <hr>

        <!-- Post Content -->
        <h3 class="row offset-md-2">Dados da Sala Fora</h3>
            <table class="row offset-md-2">
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Localidade</th>
                <th>Status</th>
                <th>Gestor Auxiliar</th>
            </table>
        <hr>
        <hr>

        <!-- Post Content -->
        <h3 class="row offset-md-2">Financeiro</h3>
        <div class="content card ">
            <h3 class="row offset-md-2">Contrato</h3>
            <div class="row row offset-md-2">                
                <span class="col-md-4"> <p class="blue"> {{$vigilancia['tipo']}} </p>{{($vigilancia['total'])}}</span>    
                <span class="col-md-4"> <p class="blue"> {{$merendeira['tipo']}} </p>{{($merendeira['total'])}}</span>
                <span class="col-md-4"> <p class="blue"> {{$limpeza['tipo']}} </p>{{($limpeza['total'])}}</span>
            </div><br>
        </div>
        <hr>
        <div class="content card ">
            <h3 class="row offset-md-2">Repasses</h3>
                <div class="row row offset-md-2">                
                    <span class="col-md-4"> <p class="blue"> {{$manutencao['tipo']}} </p>{{($manutencao['total'])}}</span>    
                    <span class="col-md-4"> <p class="blue"> {{$terceiros['tipo']}} </p>{{($terceiros['total'])}}</span>
                    <span class="col-md-4"> <p class="blue"> {{$outros['tipo']}} </p>{{($outros['total'])}}</span>
                </div><br>
            <hr>      
        </div>
    </div> 
</div>
@endsection
