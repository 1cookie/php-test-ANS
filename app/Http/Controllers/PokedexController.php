<?php

namespace App\Http\Controllers;

use App\Services\PokemonService;
use Illuminate\Http\Request;

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

    public function search(Request $request)
    {
        $search = $request->input('search');
        $filteredList = $this->pokemonService->getPokemonByName($search);

        return view('pokedex.index', compact('filteredList'));
    }

}
