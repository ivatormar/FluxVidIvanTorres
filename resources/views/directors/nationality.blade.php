@extends('layout')
@section('content')
    <h1>Directors from {{ $country }}</h1>
    <ul>
        @foreach ($directors as $director)
            <li>{{ $director->name }}
                @if ($director->movies->count() > 0)
                    <ul>
                        @foreach ($director->movies as $movie)
                            <li>{{ $movie->title }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>No movies</p>
                @endif
            </li>
        @endforeach
    </ul>
@endsection
