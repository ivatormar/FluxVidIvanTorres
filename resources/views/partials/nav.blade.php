<nav>
    <a href="{{ route('index') }}">Main</a>
    <a href="{{ route('movies.index') }}">Movie list</a>
    <a href="{{ route('movies.create') }}">New Movie</a>
    <a href="{{ route('directors.index') }}">Directors Index</a>
    @auth
    {{-- Mostrar enlaces para usuarios autenticados --}}
    <a href="{{ route('users.profile') }}">Profile</a>
    <form action="{{ route('logout') }}" method="POST" style="display:inline">
        @csrf
        <button type="submit">Logout</button>
    </form>
@else
    {{-- Mostrar enlaces para usuarios no autenticados --}}
    <a href="{{ route('signupForm') }}">Register</a>
    <a href="{{ route('loginForm') }}">Login</a>
@endauth

    <form action="/directors/nationality/" method="POST">
        @csrf
        <select name="country">
            @foreach ($countries as $country)
                <option value="{{ $country->nationality }}" name="{{ $country->nationality }}">{{ $country->nationality }}
                </option>
            @endforeach
        </select>
        <input type="submit" value="Enviar">
    </form>
</nav>
