<h1>{{ ucfirst($pokemon['name']) }}</h1>
<img src="{{ $pokemon['sprites']['front_default'] }}" alt="{{ $pokemon['name'] }}">
<p>Species: {{ $pokemon['species']['name'] }}</p>
<p>Height: {{ $pokemon['height'] }} decimetres</p>
<p>Weight: {{ $pokemon['weight'] }} hectograms</p>
<p>Abilities:</p>
<ul>
    @foreach($pokemon['abilities'] as $ability)
        <li>{{ $ability['ability']['name'] }}</li>
    @endforeach
</ul>
<a href="{{ route('pokedex.index') }}">Back to Pokedex</a>
