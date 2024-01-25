@extends('layout')
@section('title', 'Modificar película')

@section('content')
    <br>
    <form action=" {{ route('movies.update', $movie) }}" method="post">
        @csrf
        @method('put')

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title')?old('title'):$movie->title }}">
        @error('title')
            <br> Error:{{ $message }}
        @enderror
        <br>

        <label for="year">Año:</label>
        <select name="year" id="year">
            <option value="selecciona">Selecciona un año</option>
            @for ($i = 1950; $i < date('Y') + 2; $i++)
                <option value=" {{ $i }}"{{ $i == $movie->year ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>
        @error('year')
            <br> Error:{{ $message }}
        @enderror
        <br>

        <br>
        <label for="plot">Argumento</label>
        <textarea type="text" name="plot" id="plot" cols="30" rows="10">{{ old('plot') ? old('plot') : $movie->plot }}</textarea>
        @error('plot')
            <br> Error:{{ $message }}
        @enderror
        <br>
        <br>
        <label for="rating">Puntuacion (de 0 a 5 con un decimal):</label>
        <input type="text" name="rating" id="rating" value="{{ old(rating) ? old(rating) : $movie->rating }}">
        @error('rating')
            Error:{{ $message }}
        @enderror
        <br>

        <br>
        <label for="visibility">Visible:</label>
        <input type="checkbox" name="visibility" id="visibility" {{ $movie->visibility == 1 ? 'checked' : '' }}>
        <br>

        <br>
        <select name="director" id="director">
            <option value="selecciona">Selecciona un director</option>
            @foreach ($directors as $director)
                <option value="{{ $director->id }}" {{ $director->id == $movie->director_id ? 'selected' : '' }}>
                    {{ $director->name }}</option>
            @endforeach
        </select>
        @error('director')
            <br> Error:{{ $message }}
        @enderror
        <br>

        <br>
        <input type="submit" value="enviar">
    </form>
@endsection
