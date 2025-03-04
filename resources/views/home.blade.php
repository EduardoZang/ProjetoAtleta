@extends('layouts.app')

@section('title', 'Bem-vindo ao Projeto Atleta')

@section('content')
<div class="container text-center py-5">
    <h1 class="mb-4">Bem-vindo ao Projeto Atleta</h1>
    <p class="lead">Gerencie atletas, competições e modalidades esportivas com facilidade.</p>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="{{ asset('marble/images/athletes.jpg') }}" class="card-img-top" alt="Atletas">
                <div class="card-body">
                    <h5 class="card-title">Gerenciar Pessoas</h5>
                    <p class="card-text">Visualize, adicione e edite informações sobre atletas e professores.</p>
                    <a href="{{ url('/people') }}" class="btn btn-primary">Acessar</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="{{ asset('marble/images/competitions.jpg') }}" class="card-img-top" alt="Competições">
                <div class="card-body">
                    <h5 class="card-title">Gerenciar Competições</h5>
                    <p class="card-text">Acompanhe eventos esportivos e defina regras para cada competição.</p>
                    <a href="{{ url('/competitions') }}" class="btn btn-secondary">Acessar</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="{{ asset('marble/images/sports.jpg') }}" class="card-img-top" alt="Esportes">
                <div class="card-body">
                    <h5 class="card-title">Modalidades Esportivas</h5>
                    <p class="card-text">Gerencie diferentes modalidades esportivas e seus atletas.</p>
                    <a href="{{ url('/sports') }}" class="btn btn-success">Acessar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection