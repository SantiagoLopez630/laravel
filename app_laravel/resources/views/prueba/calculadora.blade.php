<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
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
                <a href="{{ route('producto.index') }}" class="text-white px-4 py-2 hover:bg-blue-700">Productos</a>
                <a href="{{ route('banco.index') }}" class="text-white px-4 py-2 hover:bg-blue-700">Bancos</a>
                <a href="{{ route('cargo.index') }}" class="text-white px-4 py-2 hover:bg-blue-700">Cargos</a>
                <a href="{{ route('empresa.index') }}" class="text-white px-4 py-2 hover:bg-blue-700">Empresas</a>
                <a href="{{ route('envia_calculadora') }}" class="text-white px-4 py-2 hover:bg-blue-700">Calculadora</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto p-8 flex flex-col items-center">
        <h1 class="text-3xl font-bold mb-6">Calculadora</h1>
        
        <form action="{{ route('calcular_datos') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-md">
            @csrf
            <div class="mb-4">
                <label for="numero1" class="block text-gray-700 text-sm font-bold mb-2">Número 1:</label>
                <input type="text" name="numero1" id="numero1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="numero2" class="block text-gray-700 text-sm font-bold mb-2">Número 2:</label>
                <input type="text" name="numero2" id="numero2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="operacion" class="block text-gray-700 text-sm font-bold mb-2">Operación:</label>
                <select name="operacion" id="operacion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value='suma'>SUMAR</option>
                    <option value="resta">RESTAR</option>
                    <option value="multiplicacion">MULTIPLICAR</option>
                    <option value="divicion">DIVIDIR</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>
        </form>

        @if (isset($resultado))
            <h2 class="text-xl font-bold mt-4">Resultado: <span class="text-blue-600">{{ $resultado }}</span></h2>
        @endif
    </div>
</body>
</html>
