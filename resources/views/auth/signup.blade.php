<form action="{{ route('signup') }}" method="post">
    @csrf
    <label for="username"> Nombre de usuario:</label><br>
    <input type="text" name="username" id="username" value="{{ old('username') }}"><br>

    <label for="name"> Nombre completo:</label><br>
    <input type="text" name="name" id="name" value="{{ old('name') }}"><br>

    <label for="birthDate"> Fecha de nacimiento:</label><br>
    <input type="date" name="birthDate" id="birthDate" value="{{ old('birthDate') }}"><br>

    <label for="email"> Email:</label><br>
    <input type="text" name="email" id="email" value="{{ old('email') }}"><br>

    <label for="password"> Contraseña:</label><br>
    <input type="password" name="password" id="password"><br>

    <label for="password_confirmation"> Confirmar contraseña:</label><br>
    <input type="password" name="password_confirmation" id="password_confirmation"><br>

    <input type="submit" value="Enviar">
</form>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
