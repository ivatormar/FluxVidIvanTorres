@extends('layout')
@section('title', 'Movie list')

@section('content')
    <h1>Movie List</h1>
    <ul>
        @foreach ($movies as $movie)
            <li><a href="{{ route('movies.show', $movie->slug) }}">{{ $movie->title }}</a> - <a
                    href="{{ route('directors.show', $movie->director) }}"> {{ $movie->director->name }}</a></li>
        @endforeach
    </ul>

    {{ $movies->links() }}
@endsection
