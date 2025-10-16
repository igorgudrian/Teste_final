@extends('layouts.app')
@section('title', 'Dados do curso')
@section('content')
    <h1>Lista de Cursos</h1>
    @foreach ($curso_n_informatica as $curso)
    <p>{{$curso->nome}}</p>
    @endforeach
    <h1>Lista de Cursos</h1>
    @foreach ($curso_igual as $curso)
    <p>{{$curso->nome}}</p>
    @endforeach
    <a href="{{route('curso.create')}}">Cadastrar</a>
    <table class="container">
        <thead>
            <th>Nome Curso</th>
            <th>Id</th>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
            <tr>
            <td>{{$curso->nome}}</td>
            <td>
                <a class="btn btn-success" href="{{route('curso.edit', $curso->id)}}">Editar</a>
                <a class="btn btn-primary" href="{{route('curso.show', $curso->id)}}">Vizualizar</a>
                <form class="btn btn-danger" action="{{route('curso.destroy', $curso->id)}}" method="post">
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