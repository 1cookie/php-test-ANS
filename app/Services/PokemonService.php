<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PokemonService
{
    public function getAllPokemons()
    {
        $response = Http::get('https://pokeapi.co/api/v2/pokemon?limit=100');

        if ($response->successful()) {
            return $response->json()['results'];
        }

        return [];
    }

    public function getPokemonByName($name)
    {
        $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$name}");

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }
}
