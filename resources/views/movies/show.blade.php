@extends('layout')

@section('content')
<h1>Ficha de la pelicula: {{$id}} </h1>
<h2><a href="{{route('movies.edit',$id)}}">Editar pelicula</a></h2>
@endsection
