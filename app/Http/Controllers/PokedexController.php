<?php

namespace App\Http\Controllers;

use App\Services\PokemonService;

class PokedexController extends Controller
{
    protected $pokemonService;

    public function __construct(PokemonService $pokemonService)
    {
        $this->pokemonService = $pokemonService;
    }

    public function index()
    {
        $pokemonList = $this->pokemonService->getAllPokemons();
        return view('pokedex.index', compact('pokemonList'));
    }
}
