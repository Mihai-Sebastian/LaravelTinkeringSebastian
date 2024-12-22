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
    <section class="py-16 px-4 md:py-24 lg:py-32 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto max-w-7xl">
            <div class="text-center mb-16">
                <p class="text-sm font-semibold tracking-wider text-indigo-600 uppercase mb-2">
                    Les teves pel·lícules i sèries preferides
                </p>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                    Organitza i gestiona tot el teu contingut audiovisual
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Amb la nostra plataforma, pots afegir les teves pel·lícules i sèries favorites, editar-ne la informació, eliminar-ne si ja no t'interessen, o consultar més detalls de cada títol.
                </p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 flex flex-col">
                    <img src="https://imagenes.elpais.com/resizer/v2/UU7EK3LSSRL77HQH5ZHQRJAJIA.jpg?auth=55427cda34ee0832111eb322a50b2305b17bcf0f8986aec80f41c7208a2aeeee&width=1200" alt="Afegir contingut" class="w-full h-48 object-cover object-center" />
                    <div class="p-6 flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Afegir pel·lícules i sèries</h3>
                            <p class="text-gray-600 mb-4">
                                Guarda qualsevol pel·lícula o sèrie al sistema. Afegeix títols, gèneres, sinopsis i altres detalls fàcilment.
                            </p>
                        </div>
                        <a href="/pelicules" class="text-indigo-600 hover:text-indigo-800 font-medium">Saber més &rarr;</a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 flex flex-col">
                    <img src="https://i.blogs.es/8ed5fc/lord-of-rings-31-2/450_1000.jpeg" alt="Modificar contingut" class="w-full h-48 object-cover object-center" />
                    <div class="p-6 flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Modificar informació</h3>
                            <p class="text-gray-600 mb-4">
                                Edita qualsevol detall dels títols de la teva llista per mantenir-la sempre actualitzada i rellevant.
                            </p>
                        </div>
                        <a href="/pelicules" class="text-indigo-600 hover:text-indigo-800 font-medium">Saber més &rarr;</a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 flex flex-col">
                    <img src="https://img.zonared.com/images/noticias/portada/50000/50452-h.jpg" alt="Eliminar contingut" class="w-full h-48 object-cover object-center" />
                    <div class="p-6 flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Eliminar títols</h3>
                            <p class="text-gray-600 mb-4">
                                Si ja no necessites un títol, pots eliminar-lo fàcilment de la teva col·lecció.
                            </p>
                        </div>
                        <a href="/series" class="text-indigo-600 hover:text-indigo-800 font-medium">Saber més &rarr;</a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 flex flex-col">
                    <img src="https://imgsrv.crunchyroll.com/cdn-cgi/image/fit=contain,format=auto,quality=85,width=1200,height=675/catalog/crunchyroll/36bdc5ea4443cd8e42f22ec7d3884cbb.jpg" alt="Consultar contingut" class="w-full h-48 object-cover object-center" />
                    <div class="p-6 flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Consulta informació</h3>
                            <p class="text-gray-600 mb-4">
                                Mira detalls com la sinopsi, el gènere i altres dades rellevants de qualsevol pel·lícula o sèrie de la teva col·lecció.
                            </p>
                        </div>
                        <a href="/series" class="text-indigo-600 hover:text-indigo-800 font-medium">Saber més &rarr;</a>
                    </div>
                </div>
            </div>

            <div class="mt-16 flex justify-center space-x-4">
                <a href="/pelicules" class="px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition duration-300 ease-in-out transform hover:-translate-y-1">
                    Pel·lícules
                </a>
                <a href="/series" class="px-6 py-3 bg-purple-600 text-white font-semibold rounded-lg shadow-md hover:bg-purple-700 transition duration-300 ease-in-out transform hover:-translate-y-1">
                    Sèries
                </a>
            </div>
        </div>
    </section>



    <?php require '../resources/views/components/footer.blade.php'; ?>
</div>



</body>
</html>
