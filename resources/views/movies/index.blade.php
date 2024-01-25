@extends('layout')
@section('title', 'Movie list')

@section('content')
    <h1>Movie List</h1>
    <ul>
        @auth
            @foreach ($movies as $movie)
                <li>
                    <a href="{{ route('movies.show', $movie->slug) }}">{{ $movie->title }}</a> -
                    <a href="{{ route('directors.show', $movie->director) }}">{{ $movie->director->name }}</a>
                </li>
                @if ($movie->visibility === 1)
                    - Disponible
                @else
                    - No disponible
                @endif
            @endforeach
        @else
            @foreach ($movies->where('visibility',1) as $movie)
                    <li>
                        <a href="{{ route('movies.show', $movie->slug) }}">{{ $movie->title }}</a> -
                        <a href="{{ route('directors.show', $movie->director) }}">{{ $movie->director->name }}</a>
                    </li>
            @endforeach
        @endauth
    </ul>

    {{ $movies->links() }}
@endsection
{{-- El problema ahora que hay es que el paginate te sigue mostrando todos los 32 resultados pero en realidad si que
solo se muestran aquellas peliculas que tienen visibility->1 para los no AUTH --}}
