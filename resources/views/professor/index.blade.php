@extends('layouts.app')
@section('title', 'Dados do professor')
@section('content')
    <h1>Lista de profesores</h1>
    @foreach ($professor_nome as $professor)
    <p>{{$professor->nome}}</p>
    @endforeach
    <a href="{{route('professor.create')}}">Cadastrar</a>
    <table>
        <thead>
            <th>Disciplina</th>
            <th>Nome</th>
            <th>Opções</th>
        </thead>
        <tbody>
            @foreach($professores as $professor)
            <tr>
            <td>{{$professor->disciplina}}</td>
            <td>{{$professor->nome}}</td>
            <td>
                <a  class="btn btn-success" href="{{ route('professor.edit', $professor) }}">Editar</a>
                <a  class="btn btn-primary" href="{{ route('professor.show', $professor) }}">Vizualizar</a>
                <form action="{{route('professor.destroy', $professor)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit">Excluir</button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>