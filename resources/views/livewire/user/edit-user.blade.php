<div class="fixed inset-0 z-50 flex justify-center w-full py-8 bg-black bg-opacity-40" x-show="modalEdit">

    <!-- A basic modal dialog with title, body and one button to close -->

    <div @click.away="modalEdit = false" x-show="modalEdit" x-transition.duration.500
        class="flex flex-col w-11/12 h-auto p-4 mx-2 text-left bg-white divide-y-2 divide-gray-300 rounded shadow-xl md:w-10/12 lg:w-6/12">

        <form wire:submit.prevent='update' novalidate>
            @csrf
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg font-medium leading-6 text-gray-900">
                    Form User
                </h3>

                <div class="mt-2">
                    <p class="text-sm leading-5 text-secondary">
                        silahkan ubah data user
                    </p>
                </div>
            </div>

            <div class="flex flex-col flex-1 px-4 py-2 overflow-auto h-96">

                <!-- Name -->
                <div class="mt-4">
                    <x-label for="name" :value="__('Name')" />

                    <x-input wire:model.defer="name" id="name" class="block w-full mt-1" type="text" name="name"
                        autofocus />
                    <span class="text-sm text-danger">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </span>
                </div>

                <div>
                    <x-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />
                    <select
                        class="block w-full mt-1 capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50'"
                        name="jenis_kelamin" id="jenis_kelamin" wire:model="jenis_kelamin">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>

                    <span class="text-sm text-danger">
                        @error('jenis_kelamin')
                        {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mt-4">
                    <x-label for="no_telpon" :value="__('No Telepon')" />

                    <x-input wire:model.defer="no_telpon" id="no_telpon" class="block w-full mt-1" type="text"
                        name="no_telpon" autofocus />
                    <span class="text-sm text-danger">
                        @error('no_telpon')
                        {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mt-4">
                    <x-label for="alamat" :value="__('Alamat')" />

                    <x-input wire:model.defer="alamat" id="alamat" class="block w-full mt-1" type="text" name="alamat"
                        autofocus />
                    <span class="text-sm text-danger">
                        @error('alamat')
                        {{ $message }}
                        @enderror
                    </span>
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />

                    <x-input wire:model.defer="email" id="email" class="block w-full mt-1" type="email" name="email" />
                    <span class="text-sm text-danger">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </span>
                </div>

                <div>
                    <label for="foto">Foto</label>
                    <div class="flex flex-row items-start mt-1 space-x-2">
                        <div class="">
                            <img src="{{ $foto ? $foto->temporaryUrl() : asset('storage/'.$foto_preview) }}" alt=""
                                class="object-cover w-16 h-16 rounded-lg">
                        </div>
                        <div>
                            <input type="file" wire:model.defer='foto' name="foto">
                            <span class="block text-xs text-red-700">
                                @error('foto')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
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
        </form>
    </div>
</div>