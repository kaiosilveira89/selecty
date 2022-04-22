@extends('layouts.app')

@section('title', 'Novo Cadastro')

@section('content')
<!-- Tudo aque será enviado para o template -->
    <div class="container mt-5">
        <h1>Novo Cadastro de Candidatos</h1>
        <div class="col-sm-2">
            <a href="{{ route('cadastros-index') }}" class="btn btn-warning">Voltar</a>
        </div>
        <hr>
        <form action="{{ route('cadastros-store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite seu nome..." required>
                </div>
                <br>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Digite seu email..." required>
                </div>
                <br>

                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" name="telefone" class="form-control" placeholder="Digite seu número para contato..." required>
                </div>
                <br>
                <hr>

                <div class="form-group mb-3">
                    <label for="experiencia">Experiencias:</label>
                    <input type="text" name="experiencia" class="form-control" placeholder="Descreva sua experiencia profissional..." >
                </div>
                <br>

                <div class="form-group">
                    <label for="academico">Academico:</label>
                    <input type="text" name="academico" class="form-control" placeholder="Digite sua formação academica" >
                </div>
                <br>
                <hr>

                <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input type="text" name="usuario" class="form-control" placeholder="Informe seu nome de usuário..." required>
                </div>
                <br>

                <div class="form-group">
                    <label for="senha">Password:</label>
                    <input type="password" name="senha" class="form-control" placeholder="Digite uma senha para sua conta de usuário..." required>
                </div>
                <br>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>

            </div>
        </form>
    </div>

@endsection
