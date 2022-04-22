@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
    <!-- Tudo aque será enviado para o template -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-10">
                <h1>Listagem de Candidatos</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{ route('cadastros-create') }}" class="btn btn-success">Novo Cadastro</a>
            </div>
        </div>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Experiencia</th>
                <th scope="col">Academico</th>
                <th scope="col">Usuário</th>
                <th scope="col">Password</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>

            </tr>
        </thead>
        <tbody>
            @foreach($cadastros as $cadastro)
            <tr>
                <th>{{ $cadastro->id }}</th>
                <th>{{ $cadastro->nome }}</th>
                <th>{{ $cadastro->email }}</th>
                <th>{{ $cadastro->telefone }}</th>
                <th>{{ $cadastro->experiencia }}</th>
                <th>{{ $cadastro->academico }}</th>
                <th>{{ $cadastro->usuario }}</th>
                <th>{{ $cadastro->senha }}</th>

                <th class="d-flex">
                    <a href="{{ route('cadastros-edit', ['id'=>$cadastro->id]) }}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg>
                    </a>
                </th>
                <th>
                    <form action="{{ route('cadastros-destroy', ['id'=>$cadastro->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>

                        </button>
                    </form>
                </th>
            </tr>
           @endforeach
        </tbody>
    </table>
@endsection
