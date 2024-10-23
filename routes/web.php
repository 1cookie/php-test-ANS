<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PokedexController;
use App\Http\Controllers\PokemonController;

Route::get('/', [PokedexController::class, 'index'])->name('pokedex.index');
Route::get('/search', [PokedexController::class, 'search'])->name('pokedex.search');
Route::get('/pokemon/{name}', [PokemonController::class, 'show'])->name('pokemon.show');
