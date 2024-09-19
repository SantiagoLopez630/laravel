<?php

namespace App\Http\Controllers;

use App\Models\Banco;
use Illuminate\Http\Request;

class BancoController extends Controller
{
    public function index()
    {
        $bancos = Banco::all();
        return view('banco.index', compact('bancos'));
    }

    public function create()
    {
        return view('banco.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombreBanco' => 'required|string|max:255',
            'telefonoBanco' => 'required|integer',
            'correoBanco' => 'required|email|max:255',
        ]);

        Banco::create($request->all());
        return redirect()->route('banco.index')->with('success', 'Banco creado exitosamente.');
    }

    public function edit($codigoBanco)
    {
        $banco = Banco::findOrFail($codigoBanco);
        return view('banco.edit', compact('banco'));
    }

    public function update(Request $request, $codigoBanco)
    {
        $request->validate([
            'nombreBanco' => 'required|string|max:255',
            'telefonoBanco' => 'required|integer',
            'correoBanco' => 'required|email|max:255',
        ]);

        $banco = Banco::findOrFail($codigoBanco);
        $banco->update($request->all());
        return redirect()->route('banco.index')->with('success', 'Banco actualizado exitosamente.');
    }

    public function destroy($codigoBanco)
    {
        $banco = Banco::findOrFail($codigoBanco);
        $banco->delete();
        return redirect()->route('banco.index')->with('success', 'Banco eliminado exitosamente.');
    }
}
