<nav class="bg-black fixed z-20 w-full">
    <div class="mx-auto max-w px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">


            <!-- menu burger -->
            <div class=" lg:hidden">
                <div x-data="{ isOpen: false }" class="relative">
                    <button type="button" x-on:click="open = !open"
                            class="flex items-center text-white-figma hover:text-yellow-figma"
                            id="menu-button" aria-expanded="false" aria-haspopup="false">
                        <img class="h-5 w-5 m-2" aria-expanded="true" aria-hidden="true"
                             src="{{ asset("image/picto.menu-burger.svg") }}" alt="picto burger">

                    </button>
                </div>

                <div
                    x-show="open"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"

                    class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg">
                </div>

                <div
                    class="absolute left-0 z-15 mt-8 w-50 origin-top-right rounded-md bg-black-figma shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                    x-show="open"
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                    @click.outside="open = false">
                    <div class="py-1" role="none">
                        <a href="#" class="text-yellow-figma block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                           id="menu-item-0">Home</a>
                        <a href="#" class="text-yellow-figma block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                           id="menu-item-1">Catalogue</a>
                    </div>
                </div>
            </div>


            <div class="hidden lg:flex items-center space-x-6">
                <!-- LOGO Keyland -->
                <div class="flex">
                    <img class="h-12 w-auto" src="{{ asset("image/logo.keyland.svg") }}"
                         alt="Logo Keyland">
                </div>

                <!-- HOME / CATALOGUE -->
                <div class="flex">
                    <a href="/"
                       class="text-white-figma hover:text-yellow-figma rounded-md px-2 py-4 text-lg font-medium">Home</a>
                    <a href="/catalogue"
                       class="text-white-figma hover:text-yellow-figma rounded-md px-2 py-4 text-lg font-medium font-['Roboto'] ">Catalogue</a>
                </div>
            </div>

            <!-- title keyland -->
            <div class="flex items-center">
                <div class="">
                    <img class="hidden lg:block h-12" src="{{ asset("image/title.keyland.png") }}"
                         alt="title keyland">
                </div>
                <!-- logo center mobile -->
                <div class="flex lg:hidden">
                    <img class="h-12 w-auto" src="{{ asset("image/logo.keyland.svg") }}"
                         alt="Logo Keyland">
                </div>
            </div>

            <!-- Pictogramme  -->
            <div class="flex items-center lg:gap-2 sm:static sm:inset-auto ">

                <!-- search bar -->
                <div class="hidden lg:block flex-1 justify-center lg:justify-end ">
                    <div class="w-full max-w-lg lg:max-w-xs">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <input id="search" name="search"
                                   class="block w-full rounded-md border-0 bg-gray-700 py-1.5 pl-10 pr-3 text-gray-300 placeholder:text-gray-400 focus:bg-white focus:text-gray-900 focus:ring-0 sm:text-sm sm:leading-6"
                                   placeholder="Search" type="search">
                        </div>
                    </div>
                </div>

                <!-- picto cart -->
                <button type="button" class="relative rounded-full ">
                    <img class="w-8 " src="{{ asset("image/picto.cart.svg") }}" alt="Picto Cart">
                </button>

                <!-- picto compte -->
                <button type="button" class="relative rounded-full p-1 hidden lg:block">
                    <img class="h-8 w-auto" src="{{ asset("image/picto.compte.svg") }}" alt="Picto Compte">
                </button>

            </div>

        </div>
    </div>
</nav>
