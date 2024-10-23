<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PokemonService
{
    protected $baseUrl = 'https://pokeapi.co/api/v2/';

    public function getAllPokemons()
    {
        $response = Http::get($this->baseUrl . "pokemon?limit=100");

        if ($response->successful()) {
            return $response->json()['results'];
        }

        return [];
    }

    public function getPokemonByName($name)
    {
        $response = Http::get($this->baseUrl . "pokemon/{$name}");

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }
}
