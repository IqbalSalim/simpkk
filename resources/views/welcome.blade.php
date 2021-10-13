<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/app.css" rel="stylesheet">
    <script src="/js/app.js" defer></script>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style></style>

</head>

<body class="bg-gray-200" x-data="{shown:false, open: false}">
    <div class="pb-64 bg-cover bg-hero-pattern">
        <div class="bg-black bg-opacity-20">
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
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                {{-- end logo --}}



                <div class="hidden text-sm font-medium text-white capitalize md:flex md:space-x-2 lg:space-x-4">
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
    {{-- main --}}
    <div x-intersect:enter="$el.classList.remove('-translate-y-full')"
        x-intersect:leave="$el.classList.add('-translate-y-full')"
        class="flex flex-col items-center pt-40 space-y-4 text-white transition-all duration-1000 transform">
        <h1 class="text-5xl md:text-6xl text-warning">PKK Donggala</h1>
        <p class="px-4 text-xl text-center md:w-1/2 md:px-0">Bersinergi dalam tim untuk membina kesejahteraan
            keluarga.
            Mewujudkan
            keluarga yang
            harmonis
            dan
            sejahtera untuk rakyat Indonesia yang lebih baik.</p>
    </div>


    {{-- end main --}}
    </div>

    {{-- profil --}}
    <div class="px-12 pt-10 pb-32">
        <div class="block py-10 text-center">
            <h1 class="inline text-2xl font-bold uppercase border-b-2 text-primary border-primary">Profil
            </h1>
        </div>
        <div class="flex flex-col items-center space-x-4 space-y-4 md:space-y-0 md:flex-row">
            <div class="flex-1 transition duration-1000 transform" x-intersect:enter="$el.classList.remove('opacity-0')"
                x-intersect:leave="$el.classList.add('opacity-0')">
                <img src="{{ asset('images/img1.jpg') }}" alt="gambar"
                    class="object-cover rounded-xl">
            </div>
            <div x-intersect:enter="$el.classList.remove('opacity-0')"
                x-intersect:leave="$el.classList.add('opacity-0')"
                class="flex flex-col items-center flex-1 space-y-2 text-center transition duration-1000 transform">
                <h1 class="text-xl font-medium text-primary">PKK Donggala</h1>
                <p class="text-lg text-justify text-secondary md:text-left">PKK Donggala adalah Lorem ipsum dolor sit
                    amet consectetur adipisicing
                    elit. Error,
                    reiciendis quisquam
                    qui quo fugit
                    laborum. Distinctio nulla reprehenderit, molestias itaque unde mollitia cumque et. Accusantium
                    laborum iste quo minima quisquam?</p>
                <div class="pt-4">
                    <a href="#" class=" btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    {{-- end profil --}}

    {{-- warta kegiatan --}}
    <div class="px-12 pb-20 mt-10 bg-white">
        <div class="block py-10 text-center">
            <h1 class="inline text-2xl font-bold uppercase border-b-2 text-primary border-primary">warta kegiatan
            </h1>
        </div>
        <div x-intersect:enter="$el.classList.remove('scale-x-0')" x-intersect:leave="$el.classList.add('scale-x-0')"
            class="flex flex-col space-y-4 transition-all duration-1000 transform md:space-y-0 md:flex-row md:space-x-4">
            <a href="#"
                class="flex-col space-y-4 duration-200 transform bg-white shadow-xl md:w-1/3 hover:scale-105 rounded-xl">
                <img class="object-cover w-full h-60 rounded-t-xl"
                    src="{{ asset('images/warta/news1.jpg') }}" alt="warta">
                <div class="flex flex-col px-4 py-2 space-y-2">
                    <h1 class="text-xl font-medium text-primary">Judul Berita</h1>
                    <p class="text-gray-700 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Nihil amet cumque
                        assumenda provident. Hic assumenda praesentium porro repellendus aliquam dolorum blanditiis.
                        Assumenda velit facilis dicta. Atque eveniet ipsum ratione maxime. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Laudantium asperiores ex perferendis perspiciatis voluptates
                        eligendi, similique facilis iusto ipsam quas non aliquid impedit nemo, voluptatibus repellat
                        minima eaque, magni error?</p>
                    <span class="text-sm text-default">1 jam lalu</span>
                </div>
            </a>
            <a href="#"
                class="flex-col space-y-4 duration-200 transform bg-white shadow-xl md:w-1/3 hover:scale-105 rounded-xl">
                <img class="object-cover w-full h-60 rounded-t-xl"
                    src="{{ asset('images/warta/news2.jpg') }}" alt="warta">
                <div class="flex flex-col px-4 py-2 space-y-2">
                    <h1 class="text-xl font-medium text-primary">Judul Berita</h1>
                    <p class="text-gray-700 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Nihil amet cumque
                        assumenda provident. Hic assumenda praesentium porro repellendus aliquam dolorum blanditiis.
                        Assumenda velit facilis dicta. Atque eveniet ipsum ratione maxime. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Laudantium asperiores ex perferendis perspiciatis voluptates
                        eligendi, similique facilis iusto ipsam quas non aliquid impedit nemo, voluptatibus repellat
                        minima eaque, magni error?</p>
                    <span class="text-sm text-default">1 jam lalu</span>
                </div>
            </a>
            <a href="#" class="flex-col space-y-4 duration-200 bg-white shadow-xl md:w-1/3 hover:scale-105 rounded-xl">
                <img class="object-cover w-full h-60 rounded-t-xl"
                    src="{{ asset('images/warta/news3.jpg') }}" alt="warta">
                <div class="flex flex-col px-4 py-2 space-y-2">
                    <h1 class="text-xl font-medium text-primary">Judul Berita</h1>
                    <p class="text-gray-700 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Nihil amet cumque
                        assumenda provident. Hic assumenda praesentium porro repellendus aliquam dolorum blanditiis.
                        Assumenda velit facilis dicta. Atque eveniet ipsum ratione maxime. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Laudantium asperiores ex perferendis perspiciatis voluptates
                        eligendi, similique facilis iusto ipsam quas non aliquid impedit nemo, voluptatibus repellat
                        minima eaque, magni error?</p>
                    <span class="text-sm text-default">1 jam lalu</span>
                </div>
            </a>


        </div>
        <div class="mt-8 text-center">
            <a href="#" class="btn-primary">Selengkapnya</a>
        </div>
    </div>
    {{-- end warta kegiatan --}}

    {{-- jadwal kegiatan --}}
    <div class="pb-10 mt-10 md:px-40">
        <div class="block py-10 text-center">
            <h1 class="inline text-2xl font-bold uppercase border-b-2 text-primary border-primary">jadwal kegiatan
            </h1>
        </div>
        <div x-intersect:enter="$el.classList.remove('scale-y-0')" x-intersect:leave="$el.classList.add('scale-y-0')"
            class="transition-all duration-1000 transform">
            <div class="flex flex-col items-center justify-center space-y-2 md:space-y-0 md:grid md:grid-cols-12">
                <div class="flex flex-row px-4 space-x-2 md:px-0 md:col-span-12">
                    <div class="relative md:mx-auto">
                        <div class="flex items-center justify-center w-6 h-full">
                            <div class="w-1 h-full bg-gray-300 pointer-events-none"></div>
                        </div>
                        <div class="flex items-center justify-center">
                            <span class="absolute w-3 h-3 p-1 bg-white rounded-full top-1 ring-4 ring-primary"></span>
                        </div>
                    </div>
                    <div class="flex justify-start flex-1 mb-2">
                        <div class="flex flex-row items-center w-full bg-white divide-y-0 lg:w-full card">
                            <div class="py-2 text-gray-500">
                                <h2 class="font-bold">12 Oktober 2021</h2>
                                <p class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Esse optio doloremque soluta. Placeat vero velit, nobis quod </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center space-y-2 md:space-y-0 md:grid md:grid-cols-12">
                <div class="flex flex-row px-4 space-x-2 md:px-0 md:col-span-12">
                    <div class="relative md:mx-auto">
                        <div class="flex items-center justify-center w-6 h-full">
                            <div class="w-1 h-full bg-gray-300 pointer-events-none"></div>
                        </div>
                        <div class="flex items-center justify-center">
                            <span class="absolute w-3 h-3 p-1 bg-white rounded-full top-1 ring-4 ring-primary"></span>
                        </div>
                    </div>
                    <div class="flex justify-start flex-1 mb-2">
                        <div class="flex flex-row items-center w-full bg-white divide-y-0 lg:w-full card">
                            <div class="py-2 text-gray-500">
                                <h2 class="font-bold">12 Oktober 2021</h2>
                                <p class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Esse optio doloremque soluta. Placeat vero velit, nobis quod </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center space-y-2 md:space-y-0 md:grid md:grid-cols-12">
                <div class="flex flex-row px-4 space-x-2 md:px-0 md:col-span-12">
                    <div class="relative md:mx-auto">
                        <div class="flex items-center justify-center w-6 h-full">
                            <div class="w-1 h-full bg-gray-300 pointer-events-none"></div>
                        </div>
                        <div class="flex items-center justify-center">
                            <span class="absolute w-3 h-3 p-1 bg-white rounded-full top-1 ring-4 ring-primary"></span>
                        </div>
                    </div>
                    <div class="flex justify-start flex-1 mb-2">
                        <div class="flex flex-row items-center w-full bg-white divide-y-0 lg:w-full card">
                            <div class="py-2 text-gray-500">
                                <h2 class="font-bold">12 Oktober 2021</h2>
                                <p class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Esse optio doloremque soluta. Placeat vero velit, nobis quod </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center space-y-2 md:space-y-0 md:grid md:grid-cols-12">
                <div class="flex flex-row px-4 space-x-2 md:px-0 md:col-span-12">
                    <div class="relative md:mx-auto">
                        <div class="flex items-center justify-center w-6 h-full">
                            <div class="w-1 h-full bg-gray-300 pointer-events-none"></div>
                        </div>
                        <div class="flex items-center justify-center">
                            <span class="absolute w-3 h-3 p-1 bg-white rounded-full top-1 ring-4 ring-primary"></span>
                        </div>
                    </div>
                    <div class="flex justify-start flex-1 mb-2">
                        <div class="flex flex-row items-center w-full bg-white divide-y-0 lg:w-full card">
                            <div class="py-2 text-gray-500">
                                <h2 class="font-bold">12 Oktober 2021</h2>
                                <p class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Esse optio doloremque soluta. Placeat vero velit, nobis quod </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="#" class="btn-primary">Selengkapnya</a>
        </div>




    </div>
    {{-- end jadwal kegiatan --}}

    {{-- tentang kami --}}
    <div class="px-12 pb-10 mt-10 md:h-80 bg-secondary">
        <div class="block py-10 text-center">
            <h1 class="inline text-2xl font-bold uppercase border-b-2 text-warning border-warning">tentang kami
            </h1>
        </div>
        <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
            <div class="flex flex-col flex-1 space-y-4">
                <h1 class="text-xl font-semibold uppercase text-warning">Kontak</h1>
                <div class="flex flex-col space-y-2 text-white">
                    <span>+62 80886 65xxx</span>
                    <span>pkkdonggala@gmail.com</span>
                    <a href="/" class="flex flex-row items-center space-x-2">
                        <img src="{{ asset('images/logoPKK.jpg') }}" alt="logo" class="w-10">
                        <h1 class="text-white">SIMPKK</h1>
                    </a>
                </div>
            </div>
            <div class="flex flex-col flex-1 space-y-4">
                <h1 class="text-xl font-semibold uppercase text-warning">Jelajahi</h1>
                <div class="flex flex-col space-y-2 text-white capitalize">
                    <a href="#" class="duration-200 transform hover:text-primary">profil</a>
                    <a href="#" class="duration-200 transform hover:text-primary">warta kegiatan</a>
                    <a href="#" class="duration-200 transform hover:text-primary">jadwal kegiatan</a>
                </div>
            </div>
            <div class="flex flex-col flex-1 space-y-4">
                <h1 class="text-xl font-semibold uppercase text-warning">Media Sosial</h1>
                <div class="flex flex-col space-y-2 text-white capitalize">
                    <div class="flex flex-col items-start space-y-2 md:items-start">
                        <div class="flex flex-row items-center space-x-2">
                            <div class="w-6 h-6 bg-gray-100 rounded-full p-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z" />
                                    <path fill="#fff"
                                        d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z" />
                                </svg></div>
                            <p>facebook</p>
                        </div>
                        <div class="flex flex-row items-center space-x-2">
                            <div class="w-6 h-6 bg-gray-100 rounded-full p-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <linearGradient id="_osn9zIN2f6RhTsY8WhY4a" x1="10.341" x2="40.798" y1="8.312"
                                        y2="38.769" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#2aa4f4" />
                                        <stop offset="1" stop-color="#007ad9" />
                                    </linearGradient>
                                    <path fill="url(#_osn9zIN2f6RhTsY8WhY4a)"
                                        d="M46.105,11.02c-1.551,0.687-3.219,1.145-4.979,1.362c1.789-1.062,3.166-2.756,3.812-4.758	c-1.674,0.981-3.529,1.702-5.502,2.082C37.86,8.036,35.612,7,33.122,7c-4.783,0-8.661,3.843-8.661,8.582	c0,0.671,0.079,1.324,0.226,1.958c-7.196-0.361-13.579-3.782-17.849-8.974c-0.75,1.269-1.172,2.754-1.172,4.322	c0,2.979,1.525,5.602,3.851,7.147c-1.42-0.043-2.756-0.438-3.926-1.072c0,0.026,0,0.064,0,0.101c0,4.163,2.986,7.63,6.944,8.419	c-0.723,0.198-1.488,0.308-2.276,0.308c-0.559,0-1.104-0.063-1.632-0.158c1.102,3.402,4.299,5.889,8.087,5.963	c-2.964,2.298-6.697,3.674-10.756,3.674c-0.701,0-1.387-0.04-2.065-0.122C7.73,39.577,12.283,41,17.171,41	c15.927,0,24.641-13.079,24.641-24.426c0-0.372-0.012-0.742-0.029-1.108C43.483,14.265,44.948,12.751,46.105,11.02" />
                                </svg>
                            </div>
                            <p>twitter</p>
                        </div>
                        <div class="flex flex-row items-center space-x-2">
                            <div class="w-6 h-6 bg-gray-100 rounded-full p-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <path fill="#FF3D00"
                                        d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z" />
                                    <path fill="#FFF" d="M20 31L20 17 32 24z" />
                                </svg>
                            </div>
                            <p>youtube</p>
                        </div>
                        <div class="flex flex-row items-center space-x-2">
                            <div class="w-6 h-6 p-0.5 bg-gray-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <radialGradient id="yOrnnhliCrdS2gy~4tD8ma" cx="19.38" cy="42.035" r="44.899"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fd5" />
                                        <stop offset=".328" stop-color="#ff543f" />
                                        <stop offset=".348" stop-color="#fc5245" />
                                        <stop offset=".504" stop-color="#e64771" />
                                        <stop offset=".643" stop-color="#d53e91" />
                                        <stop offset=".761" stop-color="#cc39a4" />
                                        <stop offset=".841" stop-color="#c837ab" />
                                    </radialGradient>
                                    <path fill="url(#yOrnnhliCrdS2gy~4tD8ma)"
                                        d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z" />
                                    <radialGradient id="yOrnnhliCrdS2gy~4tD8mb" cx="11.786" cy="5.54" r="29.813"
                                        gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#4168c9" />
                                        <stop offset=".999" stop-color="#4168c9" stop-opacity="0" />
                                    </radialGradient>
                                    <path fill="url(#yOrnnhliCrdS2gy~4tD8mb)"
                                        d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z" />
                                    <path fill="#fff"
                                        d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z" />
                                    <circle cx="31.5" cy="16.5" r="1.5" fill="#fff" />
                                    <path fill="#fff"
                                        d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z" />
                                </svg>
                            </div>
                            <p>instagran</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-1 md:space-y-2 lg:space-y-4">
                <h1 class="text-xl font-semibold uppercase text-warning">Alamat</h1>
                <div class="flex flex-col space-y-2 text-white capitalize">
                    <span>Jln. Asparaga, Kel. Kawanua, Kec. Posigadan, Kab. Goorontalo, Provinsi Gorontalo</span>
                </div>

            </div>

        </div>
    </div>
    {{-- end tentang kami --}}






</body>

</html>
