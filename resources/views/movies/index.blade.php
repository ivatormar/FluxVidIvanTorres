@extends('layout')
@section('content')
    <h1>Movie List</h1>
    <ul>
        @foreach ($movies as $movie)
            <li><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a></li>
        @endforeach
    </ul>

    {{$movies->links()}}
@endsection
