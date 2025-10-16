@extends('layouts.app')
@section('title', 'Dados do curso')
@section('content')
    <h1>Lista de Cursos </h1>
    <p>Nome {{$curso->nome}}</p>
@endsection    