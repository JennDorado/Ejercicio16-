<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Presidente;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function create()
    {
        $presidentes = Presidente::all();
        return view('equipos.create', compact('presidentes'));
    }

    public function index()
    {
        $equipos = Equipo::with('presidente')->get();
        return view('equipos.index', compact('equipos'));
    }

    public function store(Request $request)
    {
        $equipo = new Equipo();
        $equipo->nombre = $request->nombre;
        $equipo->ciudad = $request->ciudad;
        $equipo->codigo = $request->codigo;
        $equipo->estadio = $request->estadio;
        $equipo->aforo = $request->aforo;
        $equipo->ano = $request->ano;
        $equipo->presidente_id = $request->presidente_id;
        $equipo->save();

        return redirect()->route('equipos.index');
    }

    public function show($id)
    {
        $equipo = Equipo::with('presidente')->findOrFail($id);
        return view('equipos.show', compact('equipo'));
    }

    public function destroy($id)
    {
        $equipo = Equipo::findOrFail($id);
        $equipo->delete();

        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado con éxito');
    }

    public function edit($id)
    {
        $equipo = Equipo::findOrFail($id);
        $presidentes = Presidente::all();
        return view('equipos.edit', compact('equipo', 'presidentes'));
    }

    public function update(Request $request, $id)
    {
        $equipo = Equipo::findOrFail($id);
        $equipo->nombre = $request->nombre;
        $equipo->ciudad = $request->ciudad;
        $equipo->codigo = $request->codigo;
        $equipo->estadio = $request->estadio;
        $equipo->aforo = $request->aforo;
        $equipo->ano = $request->ano;
        $equipo->presidente_id = $request->presidente_id;
        $equipo->save();

        return redirect()->route('equipos.index')->with('success', 'Equipo actualizado con éxito');
    }
}
