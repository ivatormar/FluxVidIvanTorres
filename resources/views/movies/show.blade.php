@extends('layout')
@section('title', 'Ficha pelicula')

@section('content')
    <h1>Ficha de la pelicula: {{ $movie->title }} </h1>
    <h2>Año: {{ $movie->year }}</h2>
    <h2>Rating: {{ $movie->rating }}</h2>

    <div>
        <h2>Plot:</h2>
        <p> {{ $movie->plot }}</p>
    </div>
    <h2><a href="{{ route('movies.edit', ['movie' => $movie->slug]) }}">Editar pelicula</a></h2>
    <form action="{{route('movies.destroy',['movie'=>$movie->slug])}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Eliminar">
    </form>
@endsection
