@extends('layouts.plantilla')
@section('title', 'Cursos Create')

@section('content')
    <h1>En esta página podrás crear un curso</h1>
    <span>{{route('cursos.store')}}</span>
    <form action="{{route('cursos.store')}}" method="POST">

        {{-- Token --}}
        @csrf 

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        <br>
        @error('name')
            <span>*{{$message}}</span><br>
        @enderror
        <br>
        <label>
            Description:
            <br>
            <textarea name="description" id="" cols="21" rows="5">{{old('description')}}</textarea>
        </label>
        <br>
        @error('description')
            <span>*{{$message}}</span><br>
        @enderror
        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        <br>
        @error('categoria')
            <span>*{{$message}}</span><br>
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection