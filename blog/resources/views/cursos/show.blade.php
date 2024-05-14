@extends('layouts.plantilla')
@section('title', 'Curso '.$curso)

@section('content')
<a href="{{route('cursos.index')}}">Volver a cursos</a>
<br>
<a href="{{route('cursos.edit', $curso)}}">Editar cursos</a>
    <h1>Bienvenido al curso {{$curso->name}} </h1>
    <p><strong>{{$curso->categoria}}</strong></p>
    <p>{{$curso->description}}</p>
@endsection