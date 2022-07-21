<?php

namespace App\Http\Controllers;

use App\Models\pokedex;
use App\Http\Requests\StorepokedexRequest;
use App\Http\Requests\UpdatepokedexRequest;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $pokemon = rand(1, 100);
        $respuesta = curl_init("https://pokeapi.co/api/v2/pokemon/$pokemon");
        curl_setopt($respuesta, CURLOPT_RETURNTRANSFER, true);
        $pokemons = curl_exec($respuesta);
        curl_close($respuesta);
        $json = json_decode($pokemons);
        $pokedex = new pokedex();
        $pokedex->idp=$json->id;
        $pokedex->nombre=$json->name;
        $pokedex->img=$json->sprites->front_default;
        $pokedex->save();
        return view ('index', compact('json'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tabla()
    {
        $pokemon=pokedex::all();
        return view('/pokemon')
        ->with('pokemon', $pokemon);
    }

}
