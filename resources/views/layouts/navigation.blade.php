<nav class="bg-black z-20 w-full">
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
                        <a href="/" class="text-yellow-figma block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                           id="menu-item-0">Home</a>
                        <a href="/catalogue" class="text-yellow-figma block px-4 py-2 text-sm" role="menuitem"
                           tabindex="-1"
                           id="menu-item-1">Catalogue</a>
                        <a href="/card" class="text-yellow-figma block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                           id="menu-item-1">Panier</a>

                    </div>
                </div>
            </div>
            <div class="hidden lg:flex items-center space-x-6">
                <!-- LOGO Keyland -->
                <div class="flex">
                    <img class="h-12 w-auto" src="{{ asset("image/logo.keyland.svg") }}" alt="Logo Keyland">
                </div>

                <!-- HOME / CATALOGUE -->
                <div class="flex">
                    <a href="/"
                       class="text-white-figma hover:text-yellow-figma rounded-md px-2 py-4 text-lg font-medium font-['Roboto'] ">Home</a>
                    <a href="/catalogue"
                       class="text-white-figma hover:text-yellow-figma rounded-md px-2 py-4 text-lg font-medium font-['Roboto'] ">Catalogue</a>
                    <a href="/card"
                       class="text-white-figma hover:text-yellow-figma rounded-md px-2 py-4 text-lg font-medium font-['Roboto'] ">Panier</a>
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
            <div class="flex items-center sm:static sm:inset-auto ">
                <!-- picto compte -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500  hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                {{--                                <div>{{ Auth::user()->name }}</div>--}}
                                <div class="">
                                    <img class="h-8 w-auto" src="{{ asset("image/picto.compte.svg") }}"
                                         alt="Picto Compte">
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                            <x-dropdown-link :href="route('dashboard')">
                                {{ __('dashboard') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </div>
    </div>
</nav>
