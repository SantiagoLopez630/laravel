<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Empresa; // Para obtener la lista de empresas
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleado.index', compact('empleados'));
    }

    public function create()
    {
        $empresas = Empresa::all(); // Obtener empresas para el dropdown
        return view('empleado.create', compact('empresas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre1' => 'required|string|max:50',
            'nombre2' => 'nullable|string|max:50',
            'apellido1' => 'required|string|max:50',
            'apellido2' => 'nullable|string|max:50',
            'tipoDocumento' => 'required|string|max:50',
            'estadoCivil' => 'required|string|max:50',
            'genero' => 'required|string|max:50',
            'telefono' => 'required|integer',
            'fechaNacimiento' => 'required|date',
            'fechaExpedicion' => 'required|date',
            'correo' => 'required|email|max:50',
            'nomenclatura' => 'required|string|max:50',
            'municipio' => 'required|string|max:50',
            'barrio' => 'required|string|max:50',
            'nitEmpresa' => 'required|exists:empresa,nitEmpresa',
        ]);

        Empleado::create($request->all());

        return redirect()->route('empleado.index')->with('success', 'Empleado creado exitosamente');
    }

    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        $empresas = Empresa::all(); // Obtener empresas para el dropdown
        return view('empleado.edit', compact('empleado', 'empresas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre1' => 'required|string|max:50',
            'nombre2' => 'nullable|string|max:50',
            'apellido1' => 'required|string|max:50',
            'apellido2' => 'nullable|string|max:50',
            'tipoDocumento' => 'required|string|max:50',
            'estadoCivil' => 'required|string|max:50',
            'genero' => 'required|string|max:50',
            'telefono' => 'required|integer',
            'fechaNacimiento' => 'required|date',
            'fechaExpedicion' => 'required|date',
            'correo' => 'required|email|max:50',
            'nomenclatura' => 'required|string|max:50',
            'municipio' => 'required|string|max:50',
            'barrio' => 'required|string|max:50',
            'nitEmpresa' => 'required|exists:empresa,nitEmpresa',
        ]);

        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());

        return redirect()->route('empleado.index')->with('success', 'Empleado actualizado exitosamente');
    }

    public function destroy($id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();

        return redirect()->route('empleado.index')->with('success', 'Empleado eliminado exitosamente');
    }
}
