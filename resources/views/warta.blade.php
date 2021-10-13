<x-guest-layout>
    <div class="px-4 py-12 md:px-12">
        <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
            <div class="md:w-8/12">
                {{-- utama --}}

                <div class="flex flex-col mb-2 space-y-4 lg:space-y-0 md:col-span-7 lg:col-span-8 lg:flex-col">
                    <a href="detail-warta"
                        class="relative z-0 transition duration-200 transform bg-white rounded-lg shadow-lg hover:z-20 hover:scale-105">

                        <img src="{{ asset('images/img-1.jpg') }}" alt="gambar"
                            class="object-cover w-full h-full rounded-lg lg:rounded-none lg:rounded-t-lg filter brightness-50">

                        <div class="absolute bottom-0 px-4 py-2 text-white ledt-0">
                            <h2 class="font-semibold">Judul Berita</h2>
                            <p class="text-sm text-justify line-clamp-2 md:line-clamp-3">Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing
                                elit. Ad perspiciatis tempore est nostrum quod
                                illum et officia. Itaque, quia. Asperiores, facere numquam temporibus autem repellat
                                odio
                                similique
                                alias ex accusamus?</p>
                            <span class="text-xs">35 menit lalu</span>
                        </div>
                    </a>
                    <div class="flex flex-col space-y-4 lg:flex-row lg:space-y-0">
                        <a href="#"
                            class="relative z-0 flex-1 transition duration-200 transform bg-white rounded-lg shadow-lg hover:z-10 hover:scale-105">

                            <img src="{{ asset('images/img-2.jpg') }}" alt="gambar"
                                class="object-cover w-full h-full rounded-lg lg:rounded-none lg:rounded-bl-lg filter brightness-50">

                            <div class="absolute bottom-0 px-4 py-2 text-white ledt-0">
                                <h2 class="font-semibold">Judul Berita</h2>
                                <p class="text-sm text-justify line-clamp-2 md:line-clamp-3">Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing
                                    elit. Ad perspiciatis tempore est nostrum quod
                                    illum et officia. Itaque, quia. Asperiores, facere numquam temporibus autem repellat
                                    odio
                                    similique
                                    alias ex accusamus?</p>
                                <span class="text-xs">35 menit lalu</span>
                            </div>
                        </a>
                        <a href="#"
                            class="relative z-0 flex-1 transition duration-200 transform bg-white rounded-lg shadow-lg hover:z-10 hover:scale-105">

                            <img src="{{ asset('images/img-3.jpg') }}" alt="gambar"
                                class="object-cover w-full h-full rounded-lg lg:rounded-none lg:rounded-br-lg filter brightness-50">

                            <div class="absolute bottom-0 left-0 px-4 py-2 text-white">
                                <h2 class="font-semibold">Judul Berita</h2>
                                <p class="text-sm text-justify line-clamp-2 md:line-clamp-3">Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing
                                    elit. Ad perspiciatis tempore est nostrum quod
                                    illum et officia. Itaque, quia. Asperiores, facere numquam temporibus autem repellat
                                    odio
                                    similique
                                    alias ex accusamus?</p>
                                <span class="text-xs">35 menit lalu</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col space-y-2">
                    <a href="#" class="flex flex-row bg-white rounded-lg shadow-lg">
                        <img src="{{ asset('images/img-1.jpg') }}" alt="gambar"
                            class="w-4/12 rounded-l-lg">
                        <div class="w-8/12 p-4 text-black hover:text-primary">
                            <h2 class="font-semibold">Judul Berita</h2>
                            <p class="text-sm text-justify line-clamp-2 md:line-clamp-3">Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing
                                elit. Ad perspiciatis tempore est nostrum quod
                                illum et officia. Itaque, quia. Asperiores, facere numquam temporibus autem repellat
                                odio
                                similique
                                alias ex accusamus?</p>
                            <span class="text-xs text-default">35 menit lalu</span>
                        </div>
                    </a>
                    <a href="#" class="flex flex-row bg-white rounded-lg shadow-lg">
                        <img src="{{ asset('images/img-2.jpg') }}" alt="gambar"
                            class="w-4/12 rounded-l-lg">
                        <div class="w-8/12 p-4 text-black hover:text-primary">
                            <h2 class="font-semibold">Judul Berita</h2>
                            <p class="text-sm text-justify line-clamp-2 md:line-clamp-3">Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing
                                elit. Ad perspiciatis tempore est nostrum quod
                                illum et officia. Itaque, quia. Asperiores, facere numquam temporibus autem repellat
                                odio
                                similique
                                alias ex accusamus?</p>
                            <span class="text-xs text-default">35 menit lalu</span>
                        </div>
                    </a>
                    <a href="#" class="flex flex-row bg-white rounded-lg shadow-lg">
                        <img src="{{ asset('images/img-3.jpg') }}" alt="gambar"
                            class="w-4/12 rounded-l-lg">
                        <div class="w-8/12 p-4 text-black hover:text-primary">
                            <h2 class="font-semibold">Judul Berita</h2>
                            <p class="text-sm text-justify line-clamp-2 md:line-clamp-3">Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing
                                elit. Ad perspiciatis tempore est nostrum quod
                                illum et officia. Itaque, quia. Asperiores, facere numquam temporibus autem repellat
                                odio
                                similique
                                alias ex accusamus?</p>
                            <span class="text-xs text-default">35 menit lalu</span>
                        </div>
                    </a>
                </div>

            </div>
            <div class="md:w-4/12">
                <div class="flex-col px-2 py-2 space-y-2 bg-white rounded-lg shadow-lg">
                    <div class="flex flex-row items-center justify-between">
                        <h3 class="font-semibold">Populer</h3>
                        <span class="text-primary">Lainnya</span>
                    </div>
                    <div class="flex flex-col border-gray-100 item-center">
                        <a href="#" class="flex flex-row py-1 border-t-2 border-gray-50">
                            <img src="{{ asset('images/img-1.jpg') }}" alt="gambar"
                                class="object-cover w-4/12 rounded-md">
                            <div class="px-2 hover:text-primary">
                                <p class="text-sm font-semibold line-clamp-2">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit</p>
                                <span class="text-xs text-default">35 menit lalu</span>
                            </div>
                        </a>
                        <a href="#" class="flex flex-row py-2 border-t-2 border-gray-50">
                            <img src="{{ asset('images/img-1.jpg') }}" alt="gambar"
                                class="object-cover w-4/12 rounded-md">
                            <div class="px-2 hover:text-primary">
                                <p class="text-sm font-semibold line-clamp-2">Judul Berita Judul Berita</p>
                                <span class="text-xs text-default">35 menit lalu</span>
                            </div>
                        </a>
                        <a href="#" class="flex flex-row py-2 border-t-2 border-gray-50">
                            <img src="{{ asset('images/img-1.jpg') }}" alt="gambar"
                                class="object-cover w-4/12 rounded-md">
                            <div class="px-2 hover:text-primary">
                                <p class="text-sm font-semibold line-clamp-2">Judul Berita Judul Berita</p>
                                <span class="text-xs text-default">35 menit lalu</span>
                            </div>
                        </a>
                        <a href="#" class="flex flex-row py-2 border-t-2 border-gray-50 ">
                            <img src="{{ asset('images/img-1.jpg') }}" alt="gambar"
                                class="object-cover w-4/12 rounded-md">
                            <div class="px-2 hover:text-primary">
                                <p class="text-sm font-semibold line-clamp-2">Judul Berita Judul Berita</p>
                                <span class="text-xs text-default">35 menit lalu</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
