@extends('layout')
@section('content')
    <h1>Index Directors</h1>

    <h1>All Directors</h1>

    @foreach ($directors as $director)
        <ul>
            <li>
                Name: {{ $director->name }},
                {{-- <li>Nationality:</li> <a href="{{route('directors.getDirectorsFromNationality')}}"></a>{{ $director->nationality }}, --}}
                Nationality: <a href=" {{ route('directors.nationality', $director->nationality) }}">
                    {{ $director->nationality }} </a>,
                Birthdate: {{ $director->birthday }}
            </li>
        </ul>
    @endforeach
@endsection
