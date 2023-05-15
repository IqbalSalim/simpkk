<div class="py-12 md:px-8">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Struktur Organisasi') }}
        </h2>
    </x-slot>
    @if (session()->has('message'))
    <div class="block px-4 py-2 text-white bg-opacity-50 bg-success rounded-xl">
        {{ session('message') }}
    </div>
    @endif
    <div class="px-4 py-2 bg-white rounded-lg shadow-lg">
        <div>
            <h2 class="font-semibold text-gray-700">Form Struktur Organisasi</h2>
        </div>
        <div class="py-4">
            <form wire:submit.prevent='update' novalidate>
                <div class="mt-4">
                    <x-label for="struktur" :value="__('Upload File')" />

                    <x-input wire:model="struktur" id="struktur"
                        class="block w-full mt-1 text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                        type="file" name="struktur" autofocus />
                    <span class="text-sm text-danger">
                        @error('struktur')
                        {{ $message }}
                        @enderror
                    </span>
                </div>

                <!-- Preview what the editor is creating -->
                <div class="flex flex-row mt-4">
                    <button class="font-medium btn-primary btn-sm" wire:click.prevent='update'>Simpan</button>
                </div>

                <div class="flex flex-row items-center justify-center mt-4">
                    <div>
                        <img src="{{ $status_gambar ? asset('storage/' . $gambar) : asset($gambar) }}"
                            alt="Gambar Struktur Organisasi">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>