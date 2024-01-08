@extends('layout')
@section('content')
<h1>Index Directors</h1>

<h1>All Directors</h1>
    <ul>
        @foreach($directors as $director)
            <li>
                <li>Name:</li> {{ $director->name }},
                {{-- <li>Nationality:</li> <a href="{{route('directors.getDirectorsFromNationality')}}"></a>{{ $director->nationality }}, --}}

                <li>Nationality:</li> <a href=" {{route ('directors.nationality', $director->nationality)}}"> {{$director->nationality}} </a>,
                <li>Birthdate:</li> {{ $director->birthday }}
            </li>
        @endforeach
    </ul>
@endsection
