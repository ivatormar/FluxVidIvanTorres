@extends('layout')

@section('content')
    <h1>
        Ficha del director: {{ $director->name }} </h1>
    <h2> Fecha: {{ $director->birthday }}</h2>
    <h2> Peliculas:</h2>
    @foreach ($director->movies as $movie)
            <li><a href="{{ route('movies.show', $movie->id) }}">{{$movie->title}}</a> - {{$movie->year}}</li>
        @endforeach

    <h2> Nacionalidad: {{ $director->nationality }}</h2>
@endsection
