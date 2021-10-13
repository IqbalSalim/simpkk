<div x-data="{open : false}">
    <div class=" bg-secondary">
        <div class="flex flex-row items-center justify-between px-2 py-4 md:px-12">
            {{-- logo --}}
            <div class="flex flex-row items-center space-x-2">
                <a href="/" class="focus:outline-none focus:ring-primary focus:ring-2 focus:ring-opacity-50">
                    <img src="{{ asset('images/logoPKK.jpg') }}" alt="logo" class="w-10 h-10">
                </a>
                <h1 class="text-2xl font-bold text-white">SIMPKK</h1>

            </div>
            <div class="flex md:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 transition duration-150 ease-in-out rounded-md text-warning hover:text-primary hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-primary">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            {{-- end logo --}}



            <div class="hidden text-sm font-medium capitalize md:flex md:space-x-2 lg:space-x-4">
                <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                    {{ __('Beranda') }}
                </x-nav-link>
                <x-nav-link :href="route('profil')" :active="request()->routeIs('profil')">
                    {{ __('Profil') }}
                </x-nav-link>
                <x-nav-link :href="route('warta')" :active="request()->routeIs('warta')">
                    {{ __('Warta Kegiatan') }}
                </x-nav-link>
                <x-nav-link :href="route('jadwal-kegiatan')" :active="request()->routeIs('jadwal-kegiatan')">
                    {{ __('Jadwal Kegiatan') }}
                </x-nav-link>
                <x-nav-link :href="route('tentang-kami')" :active="request()->routeIs('tentang-kami')">
                    {{ __('Tentang Kami') }}
                </x-nav-link>
            </div>
            <div class="hidden md:flex">
                @if(Route::has('login'))
                    <div class="flex-row hidden space-x-4 sm:flex">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm text-gray-700 underline dark:text-gray-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm btn-primary">Log
                                in</a>

                            {{-- @if(Route::has('register'))
                            <a href="{{ route('register') }}"
                            class="px-4 py-2 text-sm font-medium capitalize duration-200 transform bg-white rounded-lg bg-opacity-30 focus:ring-secondary focus:ring-opacity-50 focus:outline-none hover:bg-secondary hover:text-white text-secondary ring-2 ring-secondary">Register</a>
                            --}}
                        @endif
                @endauth
            </div>

        </div>

    </div>
    <div x-show="open" x-transition.duration.500 class="flex flex-col space-y-2 bg-black bg-opacity-20">
        <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
            {{ __('Beranda') }}
        </x-nav-link>
        <x-nav-link :href="route('profil')" :active="request()->routeIs('profil')">
            {{ __('Profil') }}
        </x-nav-link>
        <x-nav-link :href="route('warta')" :active="request()->routeIs('warta')">
            {{ __('Warta Kegiatan') }}
        </x-nav-link>
        <x-nav-link :href="route('jadwal-kegiatan')" :active="request()->routeIs('jadwal-kegiatan')">
            {{ __('Jadwal Kegiatan') }}
        </x-nav-link>
        <x-nav-link :href="route('tentang-kami')" :active="request()->routeIs('tentang-kami')">
            {{ __('Tentang Kami') }}
        </x-nav-link>
        <div>
            @if(Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="block px-4 py-2 font-bold text-white capitalize">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="block px-4 py-2 font-bold text-white capitalize">Log
                        in</a>
                @endif
            @endauth
        </div>
    </div>
</div>
