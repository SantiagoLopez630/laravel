<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::all();
        return view('empresa.index', compact('empresas'));
    }

    public function create()
    {
        return view('empresa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombreEmpresa' => 'required|string|max:50',
            'telefono' => 'required|integer',
            'correo' => 'required|string|email|max:50',
            'nomenclatura' => 'required|string|max:50',
            'municipio' => 'required|string|max:50',
            'barrio' => 'required|string|max:50',
            'tipoEntidad' => 'required|string|max:50',
        ]);

        Empresa::create($request->all());
        return redirect()->route('empresa.index')->with('success', 'Empresa creada exitosamente.');
    }

    public function edit($nitEmpresa)
    {
        $empresa = Empresa::findOrFail($nitEmpresa);
        return view('empresa.edit', compact('empresa'));
    }

    public function update(Request $request, $nitEmpresa)
    {
        $request->validate([
            'nombreEmpresa' => 'required|string|max:50',
            'telefono' => 'required|integer',
            'correo' => 'required|string|email|max:50',
            'nomenclatura' => 'required|string|max:50',
            'municipio' => 'required|string|max:50',
            'barrio' => 'required|string|max:50',
            'tipoEntidad' => 'required|string|max:50',
        ]);

        $empresa = Empresa::findOrFail($nitEmpresa);
        $empresa->update($request->all());
        return redirect()->route('empresa.index')->with('success', 'Empresa actualizada exitosamente.');
    }

    public function destroy($nitEmpresa)
    {
        $empresa = Empresa::findOrFail($nitEmpresa);
        $empresa->delete();
        return redirect()->route('empresa.index')->with('success', 'Empresa eliminada exitosamente.');
    }
}
