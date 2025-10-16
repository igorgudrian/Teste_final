@extends('layouts.app')
@section('title', 'Dados do aluno')
@section('content')
    <h1>Lista de alunos </h1>
    <p>Matricula {{$aluno->matricula}}</p>
    <p>Nome {{$aluno->nome}}</p>
    <p>Email {{$aluno->email}}</p>
    <p>Data_nascimento {{$aluno->data_nascimento}}</p>
    <img src="{{ asset($aluno->foto)}}" alt="" style ="max-widht: 400px">
@endsection    
