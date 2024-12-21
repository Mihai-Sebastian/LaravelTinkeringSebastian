<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sèries</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="min-h-screen bg-gray-100">
    <?php require '../resources/views/components/header.blade.php'; ?>

    <main class="container mx-auto mt-8">
        <div class="flex justify-end mb-6">
            <a href="{{ route('series.create') }}"
               class="bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded shadow">
                Afegir nova sèrie
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($series as $serie)
                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $serie->titol }}</h2>
                    <p class="text-sm text-gray-500 mt-2">{{ $serie->genere }} - {{ $serie->any }}</p>
                    <p class="mt-4 text-gray-600">{{ $serie->descripcio }}</p>
                    <p class="mt-4 text-sm font-medium text-indigo-600">Puntuació: {{ $serie->puntuacio }}</p>

                    <div class="mt-4 flex space-x-2">
                        <a href="{{ route('series.edit', $serie->id) }}"
                           class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-1 px-3 rounded shadow">
                            Modificar
                        </a>
                        <form action="{{ route('series.destroy', $serie->id) }}" method="POST" onsubmit="return confirm('Estàs segur que vols eliminar aquesta sèrie?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="bg-red-600 hover:bg-red-500 text-white font-bold py-1 px-3 rounded shadow">
                                Eliminar
                            </button>
                        </form>
                        <a href="{{ route('series.show', $serie->id) }}"
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
