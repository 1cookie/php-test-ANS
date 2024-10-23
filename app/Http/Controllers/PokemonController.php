<?php

namespace App\Http\Controllers;

use App\Services\PokemonService;

class PokemonController extends Controller
{
    protected PokemonService $pokemonService;

    public function __construct(PokemonService $pokemonService)
    {
        $this->pokemonService = $pokemonService;
    }

    public function index()
    {
        $pokemons = $this->pokemonService->getAllPokemons();
        return view('pokemons.index', compact('pokemons'));
    }

    public function show($name)
    {
        $pokemon = $this->pokemonService->getPokemonByName($name);
        return view('pokemons.show', compact('pokemon'));
    }
}
