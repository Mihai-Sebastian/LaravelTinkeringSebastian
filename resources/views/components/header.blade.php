<header class="bg-gray-900">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">LaravelTinkering</span>
                <img class="h-8 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Atlus_logo_%282014%29.svg/1280px-Atlus_logo_%282014%29.svg.png" alt="LaravelTinkering">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button id="menu-button" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="/" class="text-sm/6 font-semibold text-white">Inici</a>
            <a href="/pelicules" class="text-sm/6 font-semibold text-white">Pel·lícules</a>
            <a href="/series" class="text-sm/6 font-semibold text-white">Series</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="/login" class="text-sm/6 font-semibold text-white">Iniciar Sessió <span aria-hidden="true">&rarr;</span></a>
        </div>
    </nav>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="lg:hidden fixed inset-0 z-10 hidden">
        <div class="fixed inset-0 z-10 bg-gray-900 opacity-50"></div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
            <div class="flex items-center justify-between">
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">LaravelTinkering</span>
                    <img class="h-8 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Atlus_logo_%282014%29.svg/1280px-Atlus_logo_%282014%29.svg.png" alt="LaravelTinkering">
                </a>
                <button id="close-button" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400">
                    <span class="sr-only">Close menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/25">
                    <div class="space-y-2 py-6">
                        <a href="/" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800">Inici</a>
                        <a href="/pelicules" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800">Pel·lícules</a>
                        <a href="/series" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800">Series</a>
                    </div>
                    <div class="py-6">
                        <a href="/login" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-white hover:bg-gray-800">Iniciar Sessió</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    // Selecciona el botó per obrir i tancar el menú
    const menuButton = document.querySelector('#menu-button');
    const mobileMenu = document.querySelector('#mobile-menu');
    const closeButton = document.querySelector('#close-button');

    // Funció per obrir el menú
    function openMenu() {
        mobileMenu.classList.remove('hidden'); // Elimina la classe 'hidden'
        mobileMenu.classList.add('flex');       // Afegeix la classe 'flex'
    }

    // Funció per tancar el menú
    function closeMenu() {
        mobileMenu.classList.add('hidden');      // Afegeix la classe 'hidden'
        mobileMenu.classList.remove('flex');     // Elimina la classe 'flex'
    }

    // Assigna l'esdeveniment de clic al botó d'obertura
    menuButton.addEventListener('click', openMenu);
    // Assigna l'esdeveniment de clic al botó de tancament
    closeButton.addEventListener('click', closeMenu);
</script>
