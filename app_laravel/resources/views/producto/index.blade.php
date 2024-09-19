<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100">
    @extends('layouts.app')

    @section('content')
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-semibold mb-6">Productos</h2>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">Id producto</th>
                        <th scope="col" class="px-6 py-3">Nombre</th>
                        <th scope="col" class="px-6 py-3">Descripción</th>
                        <th scope="col" class="px-6 py-3">País origen</th>
                        <th scope="col" class="px-6 py-3">Presentación</th>
                        <th scope="col" class="px-6 py-3">Precio</th>
                        <th scope="col" class="px-6 py-3">Stock</th>
                        <th scope="col" class="px-6 py-3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $producto->nombre }}</td>
                        <td class="px-6 py-4">{{ $producto->descripcion }}</td>
                        <td class="px-6 py-4">{{ $producto->pais_origen }}</td>
                        <td class="px-6 py-4">{{ $producto->presentacion }}</td>
                        <td class="px-6 py-4">{{ $producto->precio }}</td>
                        <td class="px-6 py-4">{{ $producto->stock }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('producto.edit', $producto->id) }}" class="text-blue-600 hover:underline">Actualizar</a>
                            <a href="{{ route('producto.destroy', $producto->id) }}" class="text-red-600 hover:underline ml-4" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $producto->id }}').submit();">Eliminar</a>
                            <form id="delete-form-{{ $producto->id }}" action="{{ route('producto.destroy', $producto->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
</body>
</html>
