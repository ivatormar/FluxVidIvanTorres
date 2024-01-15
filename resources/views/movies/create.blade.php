@extends('layout')

@section('content')
<form action=" {{route('movies.store')}}" method="post">
    @csrf

    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    <br>

    <label for="year">Año:</label>
    <select name="year" id="year">
        <option value="selecciona">Selecciona un año</option>
        @for ($i=1950; $i<date('Y')+2; $i++)
                <option value=" {{$i}}">{{$i}}</option>
        @endfor
    </select>
    <br>

    <label for="plot">Plot</label>
    <textarea type="text" name="plot" id="plot" cols="30" rows="10"></textarea>
    <br>

    <label for="rating">Puntuacion (de 0 a 5 con un decimal):</label>
    <input type="text" name="rating" id="rating">
    <br>

    <label for="visibility">Visible:</label>
    <input type="checkbox" name="visibility" id="visibility">
    <br>

    <select name="director" id="director">

        <option value="selecciona">Selecciona un director</option>
        @foreach ($directors as $director )
            <option value="{{$director->id}}">{{$director->name}}</option>
        @endforeach
    </select>
    <br>

    <input type="submit" value="enviar">
</form>
@endsection
