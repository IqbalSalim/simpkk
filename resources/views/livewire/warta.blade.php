<div class="px-4 py-12 md:px-12">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Warta Kegiatan') }}
        </h2>
    </x-slot>
    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
        <div class="md:w-8/12">
            {{-- utama --}}
            @if (count($warta1) === 3)
                <div class="flex flex-col mb-2 space-y-4 lg:space-y-0 md:col-span-7 lg:col-span-8 lg:flex-col">
                    <a href="{{ route('warta.detail', $warta1[0]->id) }}"
                        class="relative z-0 transition duration-200 transform bg-white border-b-2 border-gray-300 rounded-lg shadow-lg hover:z-20 hover:scale-105">

                        <img src="{{ asset('storage/' . $warta1[0]->gambar) }}" alt="gambar"
                            class="object-cover w-full rounded-lg h-96 lg:rounded-none lg:rounded-t-lg filter brightness-50">

                        <div class="absolute bottom-0 px-4 py-2 text-white ledt-0">
                            <h2 class="font-semibold line-clamp-2">{{ $warta1[0]->judul }}</h2>
                            <p class="text-sm text-justify line-clamp-2 md:line-clamp-3">{{ $warta1[0]->isi }}</p>
                            <span class="text-xs">{{ $warta1[0]->created_at->diffForHumans() }}</span>
                        </div>
                    </a>
                    <div class="flex flex-col space-y-4 divide-x-2 divide-gray-300 lg:flex-row lg:space-y-0">
                        <a href="{{ route('warta.detail', $warta1[1]->id) }}"
                            class="relative z-0 flex-1 transition duration-200 transform bg-white rounded-lg shadow-lg lg:rounded-none lg:rounded-bl-lg hover:z-10 hover:scale-105">

                            <img src="{{ asset('storage/' . $warta1[1]->gambar) }}" alt="gambar"
                                class="object-cover w-full h-64 rounded-lg lg:rounded-none lg:rounded-bl-lg filter brightness-50">

                            <div class="absolute bottom-0 px-4 py-2 text-white ledt-0">
                                <h2 class="font-semibold line-clamp-2">{{ $warta1[1]->judul }}</h2>
                                <p class="text-sm text-justify line-clamp-2 md:line-clamp-3">{{ $warta1[1]->isi }}</p>
                                <span class="text-xs">{{ $warta1[1]->created_at->diffForHumans() }}</span>
                            </div>
                        </a>
                        <a href="{{ route('warta.detail', $warta1[2]->id) }}"
                            class="relative z-0 flex-1 transition duration-200 transform bg-white rounded-lg shadow-lg lg:rounded-none lg:rounded-br-lg hover:z-10 hover:scale-105">

                            <img src="{{ asset('storage/' . $warta1[2]->gambar) }}"
                                class="object-cover w-full h-64 rounded-lg lg:rounded-none lg:rounded-br-lg filter brightness-50">

                            <div class="absolute bottom-0 left-0 px-4 py-2 text-white">
                                <h2 class="font-semibold line-clamp-2">{{ $warta1[2]->judul }}</h2>
                                <p class="text-sm text-justify line-clamp-2 md:line-clamp-3">{{ $warta1[2]->isi }}
                                </p>
                                <span class="text-xs">{{ $warta1[2]->created_at->diffForHumans() }}</span>
                            </div>
                        </a>
                    </div>
                </div>
            @endif
            <div class="flex flex-col space-y-2">
                @isset($wartas)
                    @foreach ($wartas as $warta)
                        <a href="{{ route('warta.detail', $warta->id) }}"
                            class="flex flex-row bg-white rounded-lg shadow-lg">
                            <img src="{{ asset('storage/' . $warta->gambar) }}" alt="gambar"
                                class="object-cover w-4/12 h-40 rounded-l-lg">
                            <div class="w-8/12 p-4 text-black hover:text-primary">
                                <h2 class="font-semibold">{{ $warta->judul }}</h2>
                                <p class="text-sm text-justify line-clamp-2 md:line-clamp-3">{{ $warta->isi }}</p>
                                <span class="text-xs text-default">{{ $warta->created_at->diffForHumans() }}</span>
                            </div>
                        </a>
                    @endforeach
                @endisset
                {{ $wartas->links() }}
            </div>

        </div>
        <div class="md:w-4/12">
            <div class="flex-col px-2 py-2 space-y-2 bg-white rounded-lg shadow-lg">
                <div class="text-center">
                    <h3 class="font-semibold text-primary">Populer</h3>
                </div>
                <div class="flex flex-col border-gray-100 item-center">
                    @isset($warta_populer)
                        @foreach ($warta_populer as $ws)
                            <a href="{{ route('warta.detail', $ws->id) }}"
                                class="flex flex-row py-1 border-t-2 border-gray-50">
                                <img src="{{ asset('storage/' . $ws->gambar) }}" alt="gambar"
                                    class="object-cover w-4/12 h-20 rounded-md">
                                <div class="px-2 hover:text-primary">
                                    <p class="text-sm font-semibold line-clamp-2">{{ $ws->judul }}</p>
                                    <span class="text-xs text-default">{{ $ws->created_at->diffForHumans() }}</span>
                                </div>
                            </a>
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
