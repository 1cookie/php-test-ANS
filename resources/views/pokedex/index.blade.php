<form action="{{ route('pokedex.search') }}" method="GET">
    <input type="text" name="search" placeholder="Search Pokémon">
    <button type="submit">Search</button>
</form>

@if (isset($filteredList['results']) && !empty($filteredList['results']))
    @foreach ($filteredList['results'] as $pokemon)
        <div>
            <a href="{{ route('pokemon.show', ['name' => $pokemon['name']]) }}">
                {{ ucfirst($pokemon['name']) }}
            </a>
        </div>
    @endforeach
@elseif (isset($pokemonList['results']) && !empty($pokemonList['results']))
    @foreach ($pokemonList['results'] as $pokemon)
        <div>
            <a href="{{ route('pokemon.show', ['name' => $pokemon['name']]) }}">
                {{ ucfirst($pokemon['name']) }}
            </a>
        </div>
    @endforeach
@else
    <p>No Pokémon found.</p>
@endif
