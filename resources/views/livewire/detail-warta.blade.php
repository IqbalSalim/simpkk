<div class="px-4 py-12 md:px-12">
    <div class="flex flex-col space-y-4 md:flex-row md:space-x-4 md:space-y-0">
        {{-- utama --}}
        <div class="md:w-8/12">
            <div class="bg-white rounded-lg shadow-lg ">
                <div class="flex flex-col px-4 py-2">
                    <h2 class="font-semibold">{{ $warta->judul }}</h2>
                    <span class="text-sm">{{ $warta->created_at->isoFormat('D MMMM Y, HH:mm:ss') }}</span>
                </div>
                <img class="object-cover w-full h-80" src="{{ asset('storage/' . $warta->gambar) }}" alt="gambar">
                <div class="flex flex-col px-4 py-2 space-y-2">
                    {{ $warta->isi }}
                </div>
            </div>
        </div>
        {{-- end utama --}}
        {{-- pupuler --}}
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
        {{-- end populer --}}
    </div>
</div>
