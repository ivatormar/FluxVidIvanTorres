<div class="character">
    <div>Name: {{ $character['name'] }} </div>
    @isset($character['alias'])
    <div>Alias: {{ $character['alias'] }}</div>
    @endisset
    <div> Pelicula: {{ $character['movie'] }}</div>
    @isset()
    <div>Edad: {{ $character['age'] }}</div>
    @endisset
    <div>Especies: {{ $character['species'] }}</div>
    <div>Género: {{ $character['gender'] }}</div>
    <img src="{{ $character['img'] }}" alt="{{ $character['name'] }}">
</div>
