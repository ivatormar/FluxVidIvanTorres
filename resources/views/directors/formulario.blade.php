
@extends('layout')

@section('content')
    <form action="{{ route('mostrar-directores', ['country' => '']) }}" method="GET">
        @csrf
        <label for="pais">Selecciona un país:</label>
        <select name="country" id="pais">
            @foreach($paises as $pais)
                <option value="{{ $pais->nombre }}">{{ $pais->nombre }}</option>
            @endforeach
        </select>
        <button type="submit">Mostrar directores</button>
    </form>
@endsection
