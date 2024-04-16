<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pokemonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//página principal
Route::get('/', function () {
    return view('layouts.base');
});


//método para obtener un pokemon aleatorio
Route::get('pokemons', [pokemonController::class, 'randomTeamPokemonAPI'])->name('pokemons');



// Route::resource('pokemons', pokemonController::class);
// Route::get('pokemons', [pokemonController::class, 'randomPokemonAPI']->name('pokemons'));
