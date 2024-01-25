@extends('layout')
@section('content')
<form action="{{route('login')}}" method="post">

@csrf
<label for="username">Nombre de usuario:</label><br>
<input type="text" name="username" id="username" value="{{old('username')}}"><br>

<label for="password">Contraseña:</label><br>
<input type="password" name="password" id="password"><br>

<input type="checkbox" name="remember" id="remember">
<label for="remember">Recordar login</label>

<input type="submit" value="Enviar">

</form>
@endsection
