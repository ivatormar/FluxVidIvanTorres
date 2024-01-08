@extends('layout')

@section('content')
    <h1>Directors from {{ $country }}</h1>
    <ul>
        @foreach($directors as $director)
            <li>{{ $director->name }}</li>
        @endforeach
    </ul>
@endsection
