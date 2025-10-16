@extends('layouts.app')
@section('title', 'Dados do aluno')
@section('content')
    <h1>Lista de professores</h1>
    <p>Disciplina {{$professor->disciplina}}</p>
    <p>Nome {{$professor->nome}}</p>
    <img src="{{ asset($professor->foto)}}" alt="" style ="max-widht: 400px">
@endsection 