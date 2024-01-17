@extends('layout')

@section('content')
<br>
    <form action=" {{ route('movies.store') }}" method="post">
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        @error('title')
            <br> Error:{{ $message }}
        @enderror
        <br>

        <br>
        <label for="year">Año:</label>
        <select name="year" id="year" value="{{ old('year') }}">
            <option value="selecciona">Selecciona un año</option>
            @for ($i = 1950; $i < date('Y') + 2; $i++)
                <option value=" {{ $i }}">{{ $i }}</option>
            @endfor
        </select>
        @error('year')
            <br> Error:{{ $message }}
        @enderror
        <br>

        <br>
        <label for="plot">Plot</label>
        <textarea type="text" name="plot" id="plot" cols="30" rows="10" value="{{ old('plot') }}"></textarea>
        @error('plot')
            <br> Error:{{ $message }}
        @enderror
        <br>

        <br>
        <label for="rating">Puntuacion (de 0 a 5 con un decimal):</label>
        <input type="text" name="rating" id="rating" value="{{ old('rating') }}">
        @error('rating')
            Error:{{ $message }}
        @enderror
        <br>

        <br>
        <label for="visibility">Visible:</label>
        <input type="checkbox" name="visibility" id="visibility" value="{{ old('visibility') }}">
        

        <select name="director" id="director" value="{{ old('rating') }}">

            <option value="selecciona">Selecciona un director</option>
            @foreach ($directors as $director)
                <option value="{{ $director->id }}">{{ $director->name }}</option>
            @endforeach
        </select>
        @error('director')
            <br> Error:{{ $message }}
        @enderror
        <br>

        <br>
        <input type="submit" value="Enviar">
    </form>
@endsection
