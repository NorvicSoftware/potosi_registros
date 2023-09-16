<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vivienda;
use App\Models\Zona;

class ViviendaController extends Controller
{
    public function index()
    {
        $viviendas = Vivienda::all();
        return view('viviendas.index', compact('viviendas'));
    }

    public function create()
    {
        $zonas = Zona::all();
        return view('viviendas.create', ['zonas' => $zonas]);
    }

    public function store(Request $request)
    {
        $request->validate([
//            'zona_id' => 'required|exists:zonas,id',
            'tamanio_m2' => 'required|integer',
            'habitaciones' => 'required|integer',
            'banios' => 'required|integer',
            'autos_parqueo' => 'required|integer',
            'costo_estimado' => 'required|numeric',
        ]);

        Vivienda::create($request->all());

        return redirect()->route('viviendas.index')
            ->with('success', 'Vivienda creada correctamente.');
    }

    public function show($id)
    {
        $vivienda = Vivienda::findOrFail($id);
        return view('viviendas.show', compact('vivienda'));
    }

    public function edit($id)
    {
        $zonas = Zona::all();
        $vivienda = Vivienda::findOrFail($id);
        return view('viviendas.edit', ['vivienda' => $vivienda, 'zonas' => $zonas]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'zona_id' => 'required|exists:zonas,id',
            'tamanio_m2' => 'required|integer',
            'habitaciones' => 'required|integer',
            'banios' => 'required|integer',
            'autos_parqueo' => 'required|integer',
            'costo_estimado' => 'required|numeric',
        ]);

        $vivienda = Vivienda::findOrFail($id);
        $vivienda->update($request->all());

        return redirect()->route('viviendas.index')
            ->with('success', 'Vivienda actualizada correctamente.');
    }

    public function destroy($id)
    {
        $vivienda = Vivienda::findOrFail($id);
        $vivienda->delete();

        return redirect()->route('viviendas.index')
            ->with('success', 'Vivienda eliminada correctamente.');
    }
}
