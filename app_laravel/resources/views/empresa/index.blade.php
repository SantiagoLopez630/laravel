<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
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
        <h2 class="text-2xl font-semibold mb-6">Lista de Empresas</h2>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th>NIT</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Nomenclatura</th>
                        <th>Municipio</th>
                        <th>Barrio</th>
                        <th>Tipo Entidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empresas as $empresa)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td>{{ $empresa->nitEmpresa }}</td>
                        <td>{{ $empresa->nombreEmpresa }}</td>
                        <td>{{ $empresa->telefono }}</td>
                        <td>{{ $empresa->correo }}</td>
                        <td>{{ $empresa->nomenclatura }}</td>
                        <td>{{ $empresa->municipio }}</td>
                        <td>{{ $empresa->barrio }}</td>
                        <td>{{ $empresa->tipoEntidad }}</td>
                        <td class="flex space-x-2">
                            <a href="{{ route('empresa.edit', $empresa->nitEmpresa) }}" class="text-blue-600 hover:underline">Editar</a>
                            <form action="{{ route('empresa.destroy', $empresa->nitEmpresa) }}" method="POST" style="display:inline;">
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
