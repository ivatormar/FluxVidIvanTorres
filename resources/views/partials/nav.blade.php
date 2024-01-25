<nav>
    <a href="{{ route('index') }}">Main</a>
    <a href="{{ route('movies.index') }}">Movie list</a>
    <a href="{{ route('movies.create') }}">New Movie</a>
    <a href="{{ route('directors.index') }}">Directors Index</a>
    @auth

        <a href="{{ route('users.profile') }}">Profile</a>
        @if (auth()->user()->rol === 'admin')
            <a href="{{ route('admins.allUsers') }}">All Users</a>
        @endif
        <form action="{{ route('logout') }}" method="GET">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <a href="{{ route('signupForm') }}">Register</a>
        <a href="{{ route('loginForm') }}">Login</a>
    @endauth

    <form action="/directors/nationality/" method="POST">
        @csrf
        <select name="country">
            @foreach ($countries as $country)
                <option value="{{ $country->nationality }}" name="{{ $country->nationality }}">
                    {{ $country->nationality }}
                </option>
            @endforeach
        </select>
        <input type="submit" value="Enviar">
    </form>
</nav>
