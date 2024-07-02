<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partido = Partido::all();
        return view('partidos.index', compact('partido'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $partido = Partido::all();
        return view('partidos.create', compact('partido'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $partido = new Partido();
        $partido->codigo = $request->codigo;
        $partido->goles_casa = $request->goles_casa;
        $partido->fecha = $request->fecha;
        $partido->goles_fuera = $request->goles_fuera;
        $partido->save();

        return redirect()->route('partidos.index');



    }

    /**
     * Display the specified resource.
     */
    public function show(Partido $partido)
    {
        return view('partidos.show', compact('partido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partido $partido)
    {
        return view('partidos.edit', compact('partido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partido $partido)
    {
        $partido->codigo = $request->codigo;
        $partido->goles_casa = $request->goles_casa;
        $partido->fecha = $request->fecha;
        $partido->goles_fuera = $request->goles_fuera;
        $partido->save();

        return redirect()->route('partidos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partido $partido)
    {
        $partido->delete();
        return redirect()->route('partidos.index');
    }
}
