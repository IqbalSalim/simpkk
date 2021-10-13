<x-guest-layout>
    <div class="px-4 py-12 md:px-12">
        <div class="flex flex-col space-y-4 md:flex-row md:space-x-4 md:space-y-0">
            {{-- utama --}}
            <div class="md:w-8/12">
                <div class="bg-white rounded-lg shadow-lg ">
                    <div class="flex flex-col px-4 py-2">
                        <h2 class="font-semibold">Judul Berita Judul Berita Judul Berita</h2>
                        <span class="text-sm">Rabu, 27 September 2021 11:07 WITA</span>
                    </div>
                    <img class="object-cover w-full" src="{{ asset('images/img-1.jpg') }}"
                        alt="gambar">
                    <div class="flex flex-col px-4 py-2 space-y-2">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, repellat odio. Accusamus,
                            iusto ab
                            numquam eius consequatur recusandae impedit itaque? Veritatis, explicabo provident officia
                            delectus
                            pariatur ipsa tempore quaerat at! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sed quas
                            quis, ex odit quo accusantium, quidem alias voluptatibus reprehenderit eius illum rerum
                            corporis
                            modi, reiciendis ipsum ullam deserunt? Eius, est.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, repellat odio. Accusamus,
                            iusto ab
                            numquam eius consequatur recusandae impedit itaque? Veritatis, explicabo provident officia
                            delectus
                            pariatur ipsa tempore quaerat at! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sed quas
                            quis, ex odit quo accusantium, quidem alias voluptatibus reprehenderit eius illum rerum
                            corporis
                            modi, reiciendis ipsum ullam deserunt? Eius, est.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, repellat odio. Accusamus,
                            iusto ab
                            numquam eius consequatur recusandae impedit itaque? Veritatis, explicabo provident officia
                            delectus
                            pariatur ipsa tempore quaerat at! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sed quas
                            quis, ex odit quo accusantium, quidem alias voluptatibus reprehenderit eius illum rerum
                            corporis
                            modi, reiciendis ipsum ullam deserunt? Eius, est.</p>
                    </div>
                </div>
            </div>
            {{-- end utama --}}
            {{-- pupuler --}}
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
            {{-- end populer --}}
        </div>
    </div>
</x-guest-layout>
