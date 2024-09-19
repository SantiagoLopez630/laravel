<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    <div class="container mx-auto p-4 flex h-screen">
        <!-- Dividir la pantalla en dos mitades -->
        <div class="w-1/2 bg-gray-200 flex items-center justify-center">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Explora nuestra Misión</h1>
                <p class="text-lg mb-6">Conoce más sobre nuestra misión y objetivos.</p>
                <a href="{{ route('vista1') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Misión</a>
            </div>
        </div>
        <div class="w-1/2 bg-gray-300 flex items-center justify-center">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Explora nuestra Visión</h1>
                <p class="text-lg mb-6">Conoce más sobre nuestra visión y actualidad.</p>
                <a href="{{ route('vista2') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Visión</a>
            </div>
        </div>
    </div>
</body>
</html>
