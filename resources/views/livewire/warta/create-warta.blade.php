<div>
    <div class="fixed inset-0 z-50 flex justify-center w-full py-4 bg-black bg-opacity-40" x-show="modal">

        <!-- A basic modal dialog with title, body and one button to close -->

        <div @click.away="modal = false" x-show="modal" x-transition.duration.500
            class="flex flex-col w-11/12 h-full p-4 mx-2 text-left bg-white divide-y-2 divide-gray-300 rounded shadow-xl">


            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg font-medium leading-6 text-gray-900">
                    Form Warta Kegiatan
                </h3>

                <div class="mt-2">
                    <p class="text-sm leading-5 text-primary">
                        silahkan isi data warta kegiatan
                    </p>
                </div>
            </div>

            <form wire:submit.prevent='store' novalidate>
                @csrf
                <div class="flex flex-col flex-1 px-4 py-2 overflow-auto h-96">
                    <div class="flex flex-col space-y-4 md:items-center md:flex-row md:space-x-4">
                        <!-- Judul -->
                        <div class="flex-1 mt-4">
                            <x-label for="judul" :value="__('Judul')" />

                            <x-input wire:model.defer="judul" id="judul" class="block w-full mt-1 text-sm" type="text"
                                name="judul" autofocus />
                            <span class="text-sm text-danger">
                                @error('judul')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <!-- penulis -->
                        <div class="mt-4">
                            <x-label for="penulis" :value="__('Penulis')" />

                            <x-input wire:model.defer="penulis" id="penulis" class="block w-full mt-1 text-sm"
                                type="text" name="penulis" autofocus />
                            <span class="text-sm text-danger">
                                @error('penulis')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <!-- gambar -->
                        <div class="mt-4">
                            <x-label for="photo" :value="__('Gambar')" />

                            <x-input wire:model="photo" id="photo"
                                class="block w-full mt-1 text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                                type="file" name="photo" autofocus />
                            <span class="text-sm text-danger">
                                @error('photo')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>



                    <!-- Isi -->
                    <div class="mt-4">
                        <x-label for="isi" :value="__('Isi Warta')" />

                        <textarea wire:model.defer="isi" id="isi"
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            type="text" name="isi" rows="12"></textarea>
                        <span class="text-sm text-danger">
                            @error('isi')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>



                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <x-button class="">
                            {{ __('Submit') }}
                        </x-button>
                        <button type="button" wire:click="closeForm" class="btn-secondary">
                            Close
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>