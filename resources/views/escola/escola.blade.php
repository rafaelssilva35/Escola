@extends('layouts')

@section('title', 'Page Title')

@section('content')
<div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">Nome Escola</h1>

        <hr>

        <!-- Date/Time -->
        <p>Código Inep:2222</p>
        <p>CNPJ:115455214521</p>

        <a href="">Status Escola</a>
        <button>Ativa</button>

        <hr>

        <!-- Preview Image -->
        <span>Endereço</span>: Esdereço
        <span>Bairro</span>: bairro qualquer
        <span>CEP</span>: 65300000
        <span>Localidade</span>: localidade
        <span>Telefone</span>: 98-99859-96589
        <span>Registro</span>: zxxxxxx
        <span>Dados do imóvel</span>: alugado
        <span>Tipo de Escola</span>: Quilombola
        <span>Tipo de Encino</span>: Médio

        <hr>

        <!-- Post Content -->
        <h3>Dados do Gestor</h3>
        <span>Nome</span>Rafael 
        <span>Tipo</span>Principal
        <span>Email:</span>Rafelssilva@gmail.com
        <span>Telefone</span>98-9855154
        <span>Forma da Eleição</span>Eleito
        <hr>

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
        <span>Contrato</span>
        <span>Repasses</span>
        <hr>

        <hr>
       

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
                </div>
            </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#">Web Design</a>
                            </li>
                            <li>
                                <a href="#">HTML</a>
                            </li>
                            <li>
                                <a href="#">Freebies</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#">JavaScript</a>
                            </li>
                            <li>
                                <a href="#">CSS</a>
                            </li>
                            <li>
                                <a href="#">Tutorials</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
                You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
        </div>

    </div>

</div>
@endsection
