<form action="{{ route('pokedex.search') }}" method="GET">
    <input type="text" name="search" placeholder="Search Pokémon">
    <button type="submit">Search</button>
</form>

@if (isset($filteredList))
    @foreach ($filteredList['results'] as $pokemon)
        <div>
            <a href="{{ route('pokemon.show', ['name' => $pokemon['name']]) }}">
                {{ ucfirst($pokemon['name']) }}
            </a>
        </div>
    @endforeach
@else
    @foreach ($pokemonList['results'] as $pokemon)
        <div>
            <a href="{{ route('pokemon.show', ['name' => $pokemon['name']]) }}">
                {{ ucfirst($pokemon['name']) }}
            </a>
        </div>
    @endforeach
@endif
