<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misión</title>
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
    <div class="container mx-auto p-4 bg-white rounded-lg shadow-md mt-10">
        <h1 class="text-3xl font-bold text-blue-600 mb-6">Misión del Software Contable</h1>
        <p class="text-lg text-gray-700">
            Nuestra misión es proporcionar una solución contable intuitiva y educativa que facilite a los aaprendices de nómina del SENA del CIDE de Soacha, el entendimiento y la gestión de los procesos financieros. Nuestro software busca simplificar las tareas contables a través de herramientas interactivas y accesibles, con el objetivo de mejorar la competencia financiera y promover una educación continua en la administración de nómina.
        </p>
    </div>
</body>
</html>
