@extends('layouts.app')
@section('title', 'Dados do turma')
@section('content')
    <h1>Lista de Turmas</h1>
   <p>{{$turma_lista}}</p>
   @foreach ($turma_id as $turma)
   <p>{{turma->nome}}</p>
   @endforeach
    <a href="{{route('turma.create')}}">Cadastrar</a>
    <table class="container">
        <thead>
            <th>Nome turma</th>
            <th>Id</th>
        </thead>
        <tbody>
            @foreach($turmas as $turma)
            <tr>
            <td>{{$turma->descricao}}</td>
            <td>
                <a class="btn btn-success" href="{{route('turma.edit', $turma->id)}}">Editar</a>
                <a class="btn btn-primary" href="{{route('turma.show', $turma->id)}}">Vizualizar</a>
                <form class="btn btn-danger" action="{{route('turma.destroy', $turma->id)}}" method="post">
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