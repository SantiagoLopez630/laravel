<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex items-center justify-between">
            <a href="{{ route('home') }}" class="text-white text-2xl">NOMAIN</a>
            <div>
                <a href="{{ route('empleado.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Crear Nuevo Empleado</a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-semibold mb-6">Lista de Empleados</h2>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">Nombre Completo</th>
                        <th scope="col" class="px-6 py-3">Teléfono</th>
                        <th scope="col" class="px-6 py-3">Correo</th>
                        <th scope="col" class="px-6 py-3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $empleado)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $empleado->nombre1 }} {{ $empleado->apellido1 }}</td>
                        <td class="px-6 py-4">{{ $empleado->telefono }}</td>
                        <td class="px-6 py-4">{{ $empleado->correo }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('empleado.edit', $empleado->documentoEmpleado) }}" class="text-blue-600 hover:underline">Actualizar</a>
                            <form action="{{ route('empleado.destroy', $empleado->documentoEmpleado) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline ml-4">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
