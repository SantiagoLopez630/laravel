<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros</title>
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
        <h1 class="text-3xl font-bold text-blue-600 mb-6">Sobre Nosotros</h1>
        <p class="text-lg text-gray-700 mb-4">
            Somos un equipo de tecnólogos en Análisis y Desarrollo de Software (ADSO) del SENA, comprometidos con la creación de soluciones tecnológicas innovadoras y efectivas. Nuestro objetivo es brindar herramientas que no solo faciliten la gestión de procesos, sino que también eduquen y capaciten a nuestros usuarios en el uso eficiente de la tecnología.
        </p>
        <p class="text-lg text-gray-700 mb-4">
            En nuestro proyecto, hemos desarrollado un software contable diseñado específicamente para el uso didáctico de los padres de nómina. Esta solución busca simplificar la administración de nómina y mejorar la comprensión de los procesos financieros a través de una interfaz intuitiva y fácil de usar.
        </p>
        <p class="text-lg text-gray-700">
            Con una formación sólida en el campo del desarrollo de software y un enfoque en la educación tecnológica, estamos dedicados a proporcionar productos que reflejen nuestro compromiso con la calidad y la accesibilidad.
        </p>
    </div>
</body>
</html>
