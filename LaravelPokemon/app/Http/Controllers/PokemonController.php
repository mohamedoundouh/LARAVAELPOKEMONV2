<?php

namespace App\Http\Controllers;
use App\Models\Pokemon;


use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.index', compact('pokemons'));
    }
    
    public function create()
    {
        return view('pokemons.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'tamano' => 'required|in:grande,mediano,pequeno',
            'peso' => 'required|numeric|between:0.01,999.99',
        ]);
    
        Pokemon::create($request->all());
    
        return redirect()->route('pokemons.index')->with('success', 'Pokemon creado exitosamente');
    }
    
    public function edit(Pokemon $pokemon)
    {
        return view('pokemons.edit', compact('pokemon'));
    }
    
    public function update(Request $request, Pokemon $pokemon)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'tamano' => 'required|in:grande,mediano,pequeno',
            'peso' => 'required|numeric|between:0.01,999.99',
        ]);
    
        $pokemon->update($request->all());
    
        return redirect()->route('pokemons.index')->with('success', 'Pokemon actualizado exitosamente');
    }
    
    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();
    
        return redirect()->route('pokemons.index')->with('success', 'Pokemon eliminado exitosamente');
    }
    }
