<nav>
    <a href="{{ route('index') }}">Main</a>
    <a href="{{ route('movies.index') }}">Movie list</a>
    <a href="{{ route('movies.create') }}">New Movie</a>
    <a href="{{ route('directors.index') }}">Directors Index</a>
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
