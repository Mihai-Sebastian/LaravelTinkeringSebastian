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

    <main class="container mx-auto mt-8">
        <div class="flex justify-end mb-6">
            <a href="{{ route('pelicules.create') }}"
               class="bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded shadow">
                Afegir nova pel·lícula
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($pelicules as $pelicula)
                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $pelicula->titol }}</h2>
                    <p class="text-sm text-gray-500 mt-2">{{ $pelicula->genere }} - {{ $pelicula->any }}</p>
                    <p class="mt-4 text-gray-600">{{ $pelicula->descripcio }}</p>
                    <p class="mt-4 text-sm font-medium text-indigo-600">Puntuació: {{ $pelicula->puntuacio }}</p>

                    <div class="mt-4 flex space-x-2">
                        <a href="{{ route('pelicules.edit', $pelicula->id) }}"
                           class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-1 px-3 rounded shadow">
                            Modificar
                        </a>
                        <form action="{{ route('pelicules.destroy', $pelicula->id) }}" method="POST" onsubmit="return confirm('Estàs segur que vols eliminar aquesta pel·lícula?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="bg-red-600 hover:bg-red-500 text-white font-bold py-1 px-3 rounded shadow">
                                Eliminar
                            </button>
                        </form>
                        <a href="{{ route('pelicules.show', $pelicula->id) }}"
                           class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-1 px-3 rounded shadow">
                            Mostrar Detalls
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <?php require '../resources/views/components/footer.blade.php'; ?>
</div>

</body>
</html>
