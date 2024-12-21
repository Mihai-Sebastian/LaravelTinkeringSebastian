<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="font-sans antialiased  ">
<div class="min-h-screen">
    <?php require '../resources/views/components/header.blade.php'; ?>
    <div>
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">

            <div class="text-center">
                <h1 class="text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">Explora i gestiona les teves pel·lícules favorites</h1>
                <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">Amb LaravelTinkering, pots afegir, editar i explorar pel·lícules, així com gestionar altres dades de manera senzilla i eficient.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="/pelicules" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Comença ara</a>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base/7 font-semibold text-indigo-600">Descobreix i gestiona</h2>
                    <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl lg:text-balance">Gestiona fàcilment pel·lícules i sèries</p>
                    <p class="mt-6 text-lg/8 text-gray-600">Explora una eina senzilla i intuïtiva per gestionar la teva col·lecció de pel·lícules i sèries. Crea, edita i organitza tota la informació de manera ràpida i eficient.</p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900">
                                <svg class="size-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z" clip-rule="evenodd" />
                                </svg>
                                CRUD de pel·lícules
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600">
                                <p class="flex-auto">Gestiona la teva col·lecció de pel·lícules: afegeix noves, edita els detalls, elimina les que ja no necessites i consulta informació completa.</p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900">
                                <svg class="size-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z" clip-rule="evenodd" />
                                </svg>
                                CRUD de sèries
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600">
                                <p class="flex-auto">Organitza les teves sèries preferides. Afegir, actualitzar, consultar detalls o eliminar sèries mai ha estat tan fàcil.</p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900">
                                <svg class="size-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M15.312 11.424a5.5 5.5 0 0 1-9.201 2.466l-.312-.311h2.433a.75.75 0 0 0 0-1.5H3.989a.75.75 0 0 0-.75.75v4.242a.75.75 0 0 0 1.5 0v-2.43l.31.31a7 7 0 0 0 11.712-3.138.75.75 0 0 0-1.449-.39Zm1.23-3.723a.75.75 0 0 0 .219-.53V2.929a.75.75 0 0 0-1.5 0V5.36l-.31-.31A7 7 0 0 0 3.239 8.188a.75.75 0 1 0 1.448.389A5.5 5.5 0 0 1 13.89 6.11l.311.31h-2.432a.75.75 0 0 0 0 1.5h4.243a.75.75 0 0 0 .53-.219Z" clip-rule="evenodd" />
                                </svg>
                                Experiència intuïtiva
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600">
                                <p class="flex-auto">Gaudeix d’una interfície dissenyada per a una navegació fàcil i ràpida entre les teves pel·lícules i sèries.</p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

    </div>


    <?php require '../resources/views/components/footer.blade.php'; ?>
</div>



</body>
</html>
