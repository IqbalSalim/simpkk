<div x-cloak class="px-4 py-2 bg-white rounded-lg shadow-lg" x-data="{ modal: false, modalEdit: false }"
    x-on:close-modal.window="modal = false" x-on:close-modal-edit.window="modalEdit = false">
    <div class="flex flex-row items-center justify-between py-2 font-semibold text-gray-700 border-b-2 border-gray-300">
        <div>
            <h2>Daftar Warta Kegiatan</h2>
        </div>
        <div>
            <button class="btn-primary" @click="modal = true">Tambah Warta</button>

        </div>
    </div>

    <livewire:warta.create-warta></livewire:warta.create-warta>
    <div class="py-4">

        {{-- Form Tambah User --}}

        <!-- Dialog (full screen) -->




        @if (session()->has('message'))
        <div class="block px-4 py-2 my-2 text-white bg-opacity-50 bg-success rounded-xl">
            {{ session('message') }}
        </div>
        @endif
        {{-- End Form Tambah User --}}
        <div class="flex flex-row items-center justify-between">
            <div>
                <select name="paginate" id="paginate" wire:model="paginate"
                    class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <option value="6">6</option>
                    <option value="12">12</option>
                    <option value="15">15</option>
                </select>
            </div>
            <div class="md:w-3/12">
                <x-input wire:model="search" id="search" class="block w-full text-sm" placeholder="Search..."
                    type="text" name="search" autofocus />
            </div>
        </div>
        <div class="w-full overflow-x-auto md:overflow-hidden">
            <div class="grid grid-cols-1 gap-4 py-2 md:grid-cols-2 lg:grid-cols-3">
                @if ($wartas)
                @foreach ($wartas as $warta)
                <div class="relative z-0 flex-col space-y-4 bg-white shadow-2xl rounded-xl">
                    @if (Storage::disk('public')->exists($warta->gambar))
                    <img class="object-cover w-full h-60 rounded-t-xl" src="{{ asset('storage/' . $warta->gambar) }}"
                        alt="">
                    @else
                    <img class="object-cover w-full h-60 rounded-t-xl" src="{{ asset('storage/images/no-image.png') }}"
                        alt="">
                    @endif
                    <div class="flex flex-col px-4 py-2 pb-16 space-y-2">
                        <h1 class="text-lg font-medium text-primary line-clamp-2">{{ $warta->judul }}</h1>
                        <p class="text-gray-700 line-clamp-3">{{ $warta->isi }}</p>
                        <span class="text-sm text-default">
                            {{ date('d M Y', strtotime($warta->created_at)) }}
                        </span>
                    </div>
                    <div
                        class="absolute bottom-0 left-0 right-0 flex flex-row items-center justify-center py-2 space-x-4 text-center">
                        <button @click="modalEdit = true" wire:click="getWarta({{ $warta->id }})" type="button"
                            class="btn-secondary">Edit</button>
                        <button wire:click="delete({{ $warta->id }})" type="button" class="btn-danger">Hapus</button>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
        {{ $wartas->links() }}

    </div>
    {{-- Modal Edit --}}
    <form wire:submit.prevent='update' novalidate>
        @csrf
        <div class="fixed inset-0 flex justify-center w-full py-8 bg-black bg-opacity-40" x-show="modalEdit">

            <!-- A basic modal dialog with title, body and one button to close -->

            <div @click.away="modalEdit = false" x-show="modalEdit" x-transition.duration.500
                class="flex flex-col w-11/12 h-auto p-4 mx-2 text-left bg-white divide-y-2 divide-gray-300 rounded shadow-xl">


                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        Form Warta Kegiatan
                    </h3>

                    <div class="mt-2">
                        <p class="text-sm leading-5 text-secondary">
                            silahkan ubah data warta kegiatan
                        </p>
                    </div>
                </div>

                <div class="flex flex-col flex-1 px-4 py-2 overflow-auto h-96">
                    <input type="hidden" wire:model="warta_id">
                    <div class="flex flex-col space-y-4 md:flex-row md:items-center md:space-x-4">
                        <!-- Judul -->
                        <div class="flex-1 mt-4">
                            <x-label for="warta_judul" :value="__('Judul')" />

                            <x-input wire:model.defer="warta_judul" id="warta_judul" class="block w-full mt-1 text-sm"
                                type="text" name="warta_judul" autofocus />
                            <span class="text-sm text-danger">
                                @error('warta_judul')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <!-- penulis -->
                        <div class="mt-4">
                            <x-label for="warta_penulis" :value="__('Penulis')" />

                            <x-input wire:model.defer="warta_penulis" id="warta_penulis"
                                class="block w-full mt-1 text-sm" type="text" name="warta_penulis" autofocus />
                            <span class="text-sm text-danger">
                                @error('warta_penulis')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <!-- gambar -->
                        <div class="mt-4">
                            <x-label for="warta_photo" :value="__('Gambar')" />

                            <x-input wire:model="warta_photo" id="warta_photo"
                                class="block w-full mt-1 text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                                type="file" name="warta_photo" autofocus />
                            <span class="text-sm text-danger">
                                @error('warta_photo')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <!-- Isi -->
                    <div class="mt-4">
                        <x-label for="warta_isi" :value="__('Isi Warta')" />

                        <textarea wire:model.defer="warta_isi" id="warta_isi"
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            type="text" name="warta_isi" rows="10"></textarea>
                        <span class="text-sm text-danger">
                            @error('warta_isi')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                </div>
                <div>
                    <div class="flex items-center justify-between mt-8">

                        <x-button class="">
                            {{ __('Submit') }}
                        </x-button>
                        <button type="button" @click="modalEdit = false" class="btn-secondary">
                            Close
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </form>

</div>