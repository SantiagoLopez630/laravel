<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Banco</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100">
  <header>
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex items-center justify-between">
            <a href="{{ route('banco.index') }}" class="text-white text-2xl">BANCOS</a>
            <div class="flex space-x-4">
                <a href="{{ route('banco.create') }}" class="bg-green-500 text-white px-6 py-3 rounded-md hover:bg-green-600">Crear Nuevo Banco</a>
            </div>
        </div>
    </nav>
  </header>
  <main class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Editar Banco</h1>

        <form action="{{ route('banco.update', $banco->codigoBanco) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label for="nombreBanco" class="block text-gray-700">Nombre:</label>
                    <input type="text" id="nombreBanco" name="nombreBanco" value="{{ $banco->nombreBanco }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="telefonoBanco" class="block text-gray-700">Teléfono:</label>
                    <input type="number" id="telefonoBanco" name="telefonoBanco" value="{{ $banco->telefonoBanco }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="correoBanco" class="block text-gray-700">Correo:</label>
                    <input type="email" id="correoBanco" name="correoBanco" value="{{ $banco->correoBanco }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
            </div>
            <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Actualizar Banco</button>
        </form>
  </main>
</body>
</html>
