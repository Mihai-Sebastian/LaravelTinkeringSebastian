<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Afegir nova sèrie</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="min-h-screen bg-gray-100">
    <?php require '../resources/views/components/header.blade.php'; ?>

    <main class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold text-center text-gray-800">Afegir nova sèrie</h1>

        <form action="{{ route('series.store') }}" method="POST" class="mt-6 max-w-4xl mx-auto bg-white p-6 rounded-lg shadow">
            @csrf

            <!-- Títol -->
            <div class="mb-4">
                <label for="titol" class="block text-sm font-medium text-gray-700">Títol</label>
                <input type="text" name="titol" id="titol" class="mt-2 p-2 w-full border border-gray-300 rounded-md" placeholder="Títol de la sèrie" value="{{ old('titol') }}" required>
                @error('titol')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Gènere -->
            <div class="mb-4">
                <label for="genere" class="block text-sm font-medium text-gray-700">Gènere</label>
                <input type="text" name="genere" id="genere" class="mt-2 p-2 w-full border border-gray-300 rounded-md" placeholder="Gènere de la sèrie" value="{{ old('genere') }}" required>
                @error('genere')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Any -->
            <div class="mb-4">
                <label for="any" class="block text-sm font-medium text-gray-700">Any</label>
                <input type="number" name="any" id="any" class="mt-2 p-2 w-full border border-gray-300 rounded-md" placeholder="Any d'estrena" value="{{ old('any') }}" required>
                @error('any')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Descripció -->
            <div class="mb-4">
                <label for="descripcio" class="block text-sm font-medium text-gray-700">Descripció</label>
                <textarea name="descripcio" id="descripcio" rows="4" class="mt-2 p-2 w-full border border-gray-300 rounded-md" placeholder="Una breu descripció de la sèrie" required>{{ old('descripcio') }}</textarea>
                @error('descripcio')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Puntuació -->
            <div class="mb-4">
                <label for="puntuacio" class="block text-sm font-medium text-gray-700">Puntuació</label>
                <input type="number" name="puntuacio" id="puntuacio" min="0" max="10"
                       class="mt-2 p-2 w-full border border-gray-300 rounded-md"
                       placeholder="Puntuació de la sèrie" value="{{ old('puntuacio') }}"
                       step="0.1" required>
                @error('puntuacio')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Temporades -->
            <div class="mb-4">
                <label for="temporades" class="block text-sm font-medium text-gray-700">Número de Temporades</label>
                <input type="number" name="temporades" id="temporades" class="mt-2 p-2 w-full border border-gray-300 rounded-md" placeholder="Número de temporades" value="{{ old('temporades') }}" required>
                @error('temporades')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Episodis -->
            <div class="mb-4">
                <label for="episodis" class="block text-sm font-medium text-gray-700">Número d'Episodis</label>
                <input type="number" name="episodis" id="episodis" class="mt-2 p-2 w-full border border-gray-300 rounded-md" placeholder="Número d'episodis per temporada" value="{{ old('episodis') }}" required>
                @error('episodis')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Creadors -->
            <div class="mb-4">
                <label for="creadors" class="block text-sm font-medium text-gray-700">Creadors</label>
                <input type="text" name="creadors" id="creadors" class="mt-2 p-2 w-full border border-gray-300 rounded-md" placeholder="Creadors de la sèrie" value="{{ old('creadors') }}">
                @error('creadors')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Sinopsis -->
            <div class="mb-4">
                <label for="sinopsis" class="block text-sm font-medium text-gray-700">Sinopsis</label>
                <textarea name="sinopsis" id="sinopsis" rows="4" class="mt-2 p-2 w-full border border-gray-300 rounded-md" placeholder="Sinopsis de la sèrie" value="{{ old('sinopsis') }}"></textarea>
                @error('sinopsis')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Botó per guardar -->
            <div class="mb-4">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded-md w-full">
                    Afegir sèrie
                </button>
            </div>
        </form>
    </main>

        <?php require '../resources/views/components/footer.blade.php'; ?>
</div>
</body>
</html>
