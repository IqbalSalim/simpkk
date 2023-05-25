<div class="py-12 md:px-8">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Profil User') }}
        </h2>
    </x-slot>


    <div class="py-4">
        <div class="px-4 py-2 bg-white rounded-lg shadow-lg">

            @if (session()->has('message'))
            <div class="block px-4 py-2 text-white bg-opacity-50 bg-success rounded-xl">
                {{ session('message') }}
            </div>
            @endif

            <form class="space-y-6" wire:submit.prevent="update" novalidate>
                @csrf
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
                            <img src="{{ $foto ? $foto->temporaryUrl() : asset('images/default-user.png') }}" alt=""
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
                <x-button class="">
                    {{ __('Submit') }}
                </x-button>
            </form>
        </div>

    </div>
</div>