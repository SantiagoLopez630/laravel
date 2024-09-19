<?php
namespace App\Http\Controllers;

use App\Models\Producto; 
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function create()
    {
        return view('producto.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|min:2|max:255',
            'descripcion' => 'required|string|min:10|max:255',
            'presentacion' => 'required|string|max:255',
            'pais_origen' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        Producto::create($request->all());

        return redirect()->route('producto.create')->with('success', 'Producto creado exitosamente');
    }

    public function index()
    {
        $productos = Producto::all();
        return view('producto.index', compact('productos'));
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|min:2|max:255',
            'descripcion' => 'required|string|min:10|max:255',
            'pais_origen' => 'required|string|max:255',
            'presentacion' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $producto = Producto::findOrFail($id);
        $producto->update($request->all());

        return redirect()->route('producto.index')->with('success', 'Producto actualizado exitosamente');
    }

    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('producto.index')->with('success', 'Producto eliminado exitosamente');
    }
}
