<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bancos</title>
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
        <h2 class="text-2xl font-semibold mb-6">Lista de Bancos</h2>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bancos as $banco)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td>{{ $banco->codigoBanco }}</td>
                        <td>{{ $banco->nombreBanco }}</td>
                        <td>{{ $banco->telefonoBanco }}</td>
                        <td>{{ $banco->correoBanco }}</td>
                        <td class="flex space-x-2">
                            <a href="{{ route('banco.edit', $banco->codigoBanco) }}" class="text-blue-600 hover:underline">Editar</a>
                            <form action="{{ route('banco.destroy', $banco->codigoBanco) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
  </main>
</body>
</html>
