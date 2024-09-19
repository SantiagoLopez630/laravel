<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Producto</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex items-center justify-between">
            <a href="{{ route('home') }}" class="text-white text-2xl">NOMAIN</a>
            <div>
                <a href="{{ route('vista1') }}" class="text-white px-4 py-2 hover:bg-blue-700">Misión</a>
                <a href="{{ route('vista2') }}" class="text-white px-4 py-2 hover:bg-blue-700">Visión</a>
                <a href="{{ route('vista3') }}" class="text-white px-4 py-2 hover:bg-blue-700">Sobre Nosotros</a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Añadir Nuevo Producto</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('producto.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    <label for="nombre" class="block text-gray-700">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="descripcion" class="block text-gray-700">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required></textarea>
                </div>
                <div>
                    <label for="presentacion" class="block text-gray-700">Presentación:</label>
                    <input type="text" id="presentacion" name="presentacion" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="pais_origen" class="block text-gray-700">País de Origen:</label>
                    <input type="text" id="pais_origen" name="pais_origen" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="precio" class="block text-gray-700">Precio:</label>
                    <input type="number" id="precio" name="precio" step="0.01" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="stock" class="block text-gray-700">Stock:</label>
                    <input type="number" id="stock" name="stock" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
            </div>
            <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Añadir Producto</button>
        </form>
    </div>
</body>
</html>
