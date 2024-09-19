<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Cargo</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100">
  <header>
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex items-center justify-between">
            <a href="{{ route('cargo.index') }}" class="text-white text-2xl">CARGOS</a>
            <div class="flex space-x-4">
                <a href="{{ route('cargo.create') }}" class="bg-green-500 text-white px-6 py-3 rounded-md hover:bg-green-600">Crear Nuevo Cargo</a>
            </div>
        </div>
    </nav>
  </header>
  <main class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Añadir Nuevo Cargo</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('cargo.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label for="nombreCargo" class="block text-gray-700">Nombre:</label>
                    <input type="text" id="nombreCargo" name="nombreCargo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="descripcion" class="block text-gray-700">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required></textarea>
                </div>
                <div>
                    <label for="nivelJerarquico" class="block text-gray-700">Nivel Jerárquico:</label>
                    <input type="text" id="nivelJerarquico" name="nivelJerarquico" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="salario" class="block text-gray-700">Salario:</label>
                    <input type="number" id="salario" name="salario" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
            </div>
            <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Añadir Cargo</button>
        </form>
  </main>
</body>
</html>
