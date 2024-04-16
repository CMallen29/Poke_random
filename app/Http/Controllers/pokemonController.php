<?php

namespace App\Http\Controllers;

use App\Models\Pokemons;
use Illuminate\Http\Controllers\Push;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Http;

class pokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons = Pokemons::latest()->paginate(6);
        return view('index', ['pokemons' => $pokemons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        Pokemons::create($request->all());
        return redirect()->route('pokemons.index')->with('success', 'Pokemon agregado con éxito');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pokemons $pokemon): RedirectResponse
    {
        $pokemon->delete();
        return redirect()->route('pokemons.index')->with('success', 'Pokemon eliminado con éxito');
    }


    public function randomTeamPokemonAPI()
    {

        $equipo = [];
        for ($i=0; $i < 6; $i++) { 
            # code...
        
        $id = rand(1, 898);
        //dd($id);
        $data = Http::get("https://pokeapi.co/api/v2/pokemon/{$id}/")->json();


        //El nombre y el tipo lo vamos a poner en mayúsculas con la función strtoupper
        $nombre = strtoupper($data['name']);

        $tipo = strtoupper($data['types'][0]['type']['name']);
        $imagen = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/{$id}.png";
        $stats = $data['stats'];
        
        // dd($stats);
        $equipo[$i]=['id'=>$id, 'nombre'=>$nombre, 'imagen'=>$imagen, 'tipo'=>$tipo, 'stats'=>$stats];
        }

        // dd($equipo);
        return view('create', ['equipo' => $equipo]);
        
    }
}
