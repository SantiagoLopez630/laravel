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
  <header>
  <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex items-center justify-between">
            <a href="{{ route('producto.index') }}" class="text-white text-2xl">STORE</a>
            <div class="flex space-x-4">
                <a href="{{ route('producto.create') }}" class="bg-green-500 text-white px-6 py-3 rounded-md hover:bg-green-600">Crear Nuevo Producto</a>
            </div>
        </div>
    </nav>
  </header>
  <main>
        @yield('content')
    </main>

</body>
</html>
