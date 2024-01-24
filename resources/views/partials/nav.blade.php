<nav>
    <a href="{{ route('index') }}">Main</a>
    <a href="{{ route('movies.index') }}">Movie list</a>
    <a href="{{ route('movies.create') }}">New Movie</a>
    <a href="{{ route('directors.index') }}">Directors Index</a>
    <a href="{{ route('signupForm') }}">Register</a>
    <a href="{{ route('loginForm') }}">Login</a>

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
