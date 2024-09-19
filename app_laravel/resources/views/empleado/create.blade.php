<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Empleado</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex items-center justify-between">
            <a href="{{ route('home') }}" class="text-white text-2xl">NOMAIN</a>
            <div>
                <a href="{{ route('empleado.index') }}" class="text-white px-4 py-2 hover:bg-blue-700">Lista de Empleados</a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Añadir Nuevo Empleado</h1>

        <form action="{{ route('empleado.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    <label for="nombre1" class="block text-gray-700">Primer Nombre:</label>
                    <input type="text" id="nombre1" name="nombre1" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="nombre2" class="block text-gray-700">Segundo Nombre:</label>
                    <input type="text" id="nombre2" name="nombre2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div>
                    <label for="apellido1" class="block text-gray-700">Primer Apellido:</label>
                    <input type="text" id="apellido1" name="apellido1" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="apellido2" class="block text-gray-700">Segundo Apellido:</label>
                    <input type="text" id="apellido2" name="apellido2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div>
                    <label for="tipoDocumento" class="block text-gray-700">Tipo de Documento:</label>
                    <input type="text" id="tipoDocumento" name="tipoDocumento" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="estadoCivil" class="block text-gray-700">Estado Civil:</label>
                    <input type="text" id="estadoCivil" name="estadoCivil" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="genero" class="block text-gray-700">Género:</label>
                    <input type="text" id="genero" name="genero" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="telefono" class="block text-gray-700">Teléfono:</label>
                    <input type="text" id="telefono" name="telefono" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="fechaNacimiento" class="block text-gray-700">Fecha de Nacimiento:</label>
                    <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="fechaExpedicion" class="block text-gray-700">Fecha de Expedición:</label>
                    <input type="date" id="fechaExpedicion" name="fechaExpedicion" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="correo" class="block text-gray-700">Correo:</label>
                    <input type="email" id="correo" name="correo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="nomenclatura" class="block text-gray-700">Nomenclatura:</label>
                    <input type="text" id="nomenclatura" name="nomenclatura" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="municipio" class="block text-gray-700">Municipio:</label>
                    <input type="text" id="municipio" name="municipio" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="barrio" class="block text-gray-700">Barrio:</label>
                    <input type="text" id="barrio" name="barrio" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="nitEmpresa" class="block text-gray-700">Empresa:</label>
                    <select id="nitEmpresa" name="nitEmpresa" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        @foreach($empresas as $empresa)
                            <option value="{{ $empresa->nitEmpresa }}">{{ $empresa->nombreEmpresa }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
        </form>
    </div>
</body>
</html>
