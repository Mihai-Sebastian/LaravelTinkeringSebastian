<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pel·lícules</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
<div class="min-h-screen bg-gray-100">
    <?php require '../resources/views/components/header.blade.php'; ?>
        <!-- Detalls de la pel·lícula -->
    <main class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold text-center text-gray-800">Detalls de la pel·lícula: {{ $pelicula->titol }}</h1>

        <div class="bg-white p-6 rounded-lg shadow mt-6">
            <h2 class="text-2xl font-semibold text-gray-800">{{ $pelicula->titol }}</h2>
            <p class="text-sm text-gray-500 mt-2">{{ $pelicula->genere }} - {{ $pelicula->any }}</p>
            <p class="mt-4 text-gray-600">{{ $pelicula->descripcio }}</p>
            <p class="mt-4 text-sm font-medium text-indigo-600">Puntuació: {{ $pelicula->puntuacio }}</p>
        </div>

        <!-- Botó per tornar a la llista -->
        <a href="{{ route('pelicules.index') }}" class="bg-indigo-600 text-white font-bold py-2 px-4 rounded-md mt-4 inline-block">
            Tornar a la llista de pel·lícules
        </a>
    </main>
    <?php require '../resources/views/components/footer.blade.php'; ?>
</div>
</body>
</html>
