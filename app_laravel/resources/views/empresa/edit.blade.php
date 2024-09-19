<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empresa</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100">
  <header>
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex items-center justify-between">
            <a href="{{ route('empresa.index') }}" class="text-white text-2xl">EMPRESAS</a>
            <div class="flex space-x-4">
                <a href="{{ route('empresa.create') }}" class="bg-green-500 text-white px-6 py-3 rounded-md hover:bg-green-600">Crear Nueva Empresa</a>
            </div>
        </div>
    </nav>
  </header>
  <main class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Editar Empresa</h1>

        <form action="{{ route('empresa.update', $empresa->nitEmpresa) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label for="nombreEmpresa" class="block text-gray-700">Nombre:</label>
                    <input type="text" id="nombreEmpresa" name="nombreEmpresa" value="{{ $empresa->nombreEmpresa }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="telefono" class="block text-gray-700">Teléfono:</label>
                    <input type="number" id="telefono" name="telefono" value="{{ $empresa->telefono }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="correo" class="block text-gray-700">Correo:</label>
                    <input type="email" id="correo" name="correo" value="{{ $empresa->correo }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="nomenclatura" class="block text-gray-700">Nomenclatura:</label>
                    <input type="text" id="nomenclatura" name="nomenclatura" value="{{ $empresa->nomenclatura }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="municipio" class="block text-gray-700">Municipio:</label>
                    <input type="text" id="municipio" name="municipio" value="{{ $empresa->municipio }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="barrio" class="block text-gray-700">Barrio:</label>
                    <input type="text" id="barrio" name="barrio" value="{{ $empresa->barrio }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="tipoEntidad" class="block text-gray-700">Tipo de Entidad:</label>
                    <input type="text" id="tipoEntidad" name="tipoEntidad" value="{{ $empresa->tipoEntidad }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
            </div>
            <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Actualizar Empresa</button>
        </form>
  </main>
</body>
</html>
