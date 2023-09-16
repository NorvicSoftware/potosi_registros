<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zona;

class ZonaController extends Controller
{
    public function index()
    {
        $zonas = Zona::all();
        return view('zonas.index', compact('zonas'));
    }

    public function create()
    {
        return view('zonas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            // Agrega validaciones para otros campos si es necesario
        ]);

        Zona::create($request->all());

        return redirect()->route('zonas.index')
            ->with('success', 'Zona creada correctamente.');
    }

    public function show($id)
    {
        $zona = Zona::findOrFail($id);
        return view('zonas.show', compact('zona'));
    }

    public function edit($id)
    {
        $zona = Zona::findOrFail($id);
        return view('zonas.edit', compact('zona'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            // Agrega validaciones para otros campos si es necesario
        ]);

        $zona = Zona::findOrFail($id);
        $zona->update($request->all());

        return redirect()->route('zonas.index')
            ->with('success', 'Zona actualizada correctamente.');
    }

    public function destroy($id)
    {
        $zona = Zona::findOrFail($id);
        $zona->delete();

        return redirect()->route('zonas.index')
            ->with('success', 'Zona eliminada correctamente.');
    }
}
