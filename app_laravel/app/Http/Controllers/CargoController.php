<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index()
    {
        $cargos = Cargo::all();
        return view('cargo.index', compact('cargos'));
    }

    public function create()
    {
        return view('cargo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombreCargo' => 'required|string|max:50',
            'descripcion' => 'required|string|max:100',
            'nivelJerarquico' => 'required|string|max:50',
            'salario' => 'required|integer',
        ]);

        Cargo::create($request->all());
        return redirect()->route('cargo.index')->with('success', 'Cargo creado exitosamente.');
    }

    public function edit($codigoCargo)
    {
        $cargo = Cargo::findOrFail($codigoCargo);
        return view('cargo.edit', compact('cargo'));
    }

    public function update(Request $request, $codigoCargo)
    {
        $request->validate([
            'nombreCargo' => 'required|string|max:50',
            'descripcion' => 'required|string|max:100',
            'nivelJerarquico' => 'required|string|max:50',
            'salario' => 'required|integer',
        ]);

        $cargo = Cargo::findOrFail($codigoCargo);
        $cargo->update($request->all());
        return redirect()->route('cargo.index')->with('success', 'Cargo actualizado exitosamente.');
    }

    public function destroy($codigoCargo)
    {
        $cargo = Cargo::findOrFail($codigoCargo);
        $cargo->delete();
        return redirect()->route('cargo.index')->with('success', 'Cargo eliminado exitosamente.');
    }
}
