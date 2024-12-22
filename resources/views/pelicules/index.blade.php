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

    <main class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Les Meves Pel·lícules</h1>
            <a href="{{ route('pelicules.create') }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Afegir nova pel·lícula
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($pelicules as $pelicula)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $pelicula->titol }}</h2>
                        <p class="text-sm text-gray-500 mb-4">{{ $pelicula->genere }} - {{ $pelicula->any }}</p>
                        <p class="text-gray-600 mb-4 line-clamp-3">{{ $pelicula->descripcio }}</p>
                        <div class="flex items-center mb-4">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-600">Puntuació: {{ $pelicula->puntuacio }}</span>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-6 py-4">
                        <div class="flex justify-between items-center">
                            <a href="{{ route('pelicules.edit', $pelicula->id) }}"
                               class="text-yellow-600 hover:text-yellow-700 font-medium transition duration-300 ease-in-out">
                                Modificar
                            </a>
                            <a href="{{ route('pelicules.show', $pelicula->id) }}"
                               class="text-blue-600 hover:text-blue-700 font-medium transition duration-300 ease-in-out">
                                Mostrar Detalls
                            </a>
                            <form action="{{ route('pelicules.destroy', $pelicula->id) }}" method="POST" onsubmit="return confirm('Estàs segur que vols eliminar aquesta pel·lícula?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="text-red-600 hover:text-red-700 font-medium transition duration-300 ease-in-out">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <?php require '../resources/views/components/footer.blade.php'; ?>
</div>

</body>
</html>
