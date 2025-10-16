@extends('layouts.app')
@section('title', 'Dados do aluno')
@section('content')
    <h1>Lista de alunos</h1>
    @foreach ($aluno_20050510 as $aluno)
    <p>{{$aluno->nome}}</p>
    @endforeach
    @foreach ($aluno_antes as $aluno)
    <p>{{$aluno->nome}}</p>
    @endforeach
    @foreach ($aluno_between as $aluno)
    <p>{{$aluno->nome}}</p>
    @endforeach
    @foreach ($aluno_silva as $aluno)
    <p>{{$aluno->nome}}</p>
    @endforeach
    @foreach ($alunox as $aluno)
    <p>{{$aluno->nome}}</p>
    @endforeach
    <a href="{{route('aluno.create')}}">Cadastrar</a>
    <table class="container">
        <thead>
            <th>Matrícula</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de nascimento</th>
            <th>Opções</th>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
            <tr>
            <td>{{$aluno->matricula}}</td>
            <td>{{$aluno->nome}}</td>
            <td>{{$aluno->email}}</td>
            <td>{{$aluno->data_nascimento}}</td>
            <td>
                <a class="btn btn-success" href="{{route('aluno.edit', $aluno->id)}}">Editar</a>
                <a class="btn btn-primary" href="{{route('aluno.show', $aluno->id)}}">Vizualizar</a>
                <form class="btn btn-danger" action="{{route('aluno.destroy', $aluno->id)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit">Excluir</button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>    
@endsection