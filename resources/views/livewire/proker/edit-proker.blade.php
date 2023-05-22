<div>
    <div class="fixed inset-0 z-50 flex justify-center w-full py-4 bg-black bg-opacity-40" x-show="modalEdit">

        <!-- A basic modalEdit dialog with title, body and one button to close -->

        <div x-show="modalEdit" x-transition.duration.500
            class="flex flex-col w-11/12 h-auto p-4 mx-2 text-left bg-white divide-y-2 divide-gray-300 rounded shadow-xl">
            <form wire:submit.prevent='update' novalidate>
                @csrf
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        Form Program Kerja
                    </h3>

                    <div class="mt-2">
                        <p class="text-sm leading-5 text-primary">
                            silahkan ubah data program kerja
                        </p>
                    </div>
                </div>

                <div class="flex flex-col flex-1 px-4 py-2 overflow-auto h-96">
                    <!-- Nama Proker -->
                    <div class="mt-4">
                        <x-label for="nama" :value="__('Nama Program Kerja')" />

                        <x-input wire:model.defer="nama" id="nama" class="block w-full mt-1 text-sm" type="text"
                            name="nama" autofocus />
                        <span class="text-sm text-danger">
                            @error('nama')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <!-- Tujuan -->
                    <div class="mt-4">
                        <x-label for="tujuan" :value="__('Tujuan')" />

                        <x-input wire:model.defer="tujuan" id="tujuan" class="block w-full mt-1 text-sm" type="text"
                            name="tujuan" autofocus />
                        <span class="text-sm text-danger">
                            @error('tujuan')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <!-- sasaran -->
                    <div class="mt-4">
                        <x-label for="sasaran" :value="__('sasaran')" />

                        <x-input wire:model.defer="sasaran" id="sasaran" class="block w-full mt-1 text-sm" type="text"
                            name="sasaran" autofocus />
                        <span class="text-sm text-danger">
                            @error('sasaran')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <!-- Penanggungjawab -->
                    <div class="mt-4">
                        <x-label for="pj" :value="__('Penanggung Jawab')" />

                        <x-input wire:model.defer="pj" id="pj" class="block w-full mt-1 text-sm" type="text" name="pj"
                            autofocus />
                        <span class="text-sm text-danger">
                            @error('pj')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="mt-4">
                        <x-label for="program_kerja" :value="__('Program Pokok')" />
                        <select wire:model.defer="program_pokok" name="program_pokok" id="program_pokok"
                            class="block w-full mt-1 text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            <option value="">-- Pilih program pokok --</option>
                            <option value="Penghayatan dan Pengamalan Pancasila">Penghayatan dan Pengamalan
                                Pancasila</option>
                            <option value="Gotong Royong">Gotong Royong</option>
                            <option value="Pangan">Pangan</option>
                            <option value="Sandang">Sandang</option>
                            <option value="Perumahan dan Tata Laksana Rumah Tangga">Perumahan dan Tata Laksana
                                Rumah
                                Tangga</option>
                            <option value="Pendidikan dan Ketrampilan">Pendidikan dan Ketrampilan</option>
                            <option value="Kesehatan">Kesehatan</option>
                            <option value="Pengembangan Kehidupan Berkoperasi">Pengembangan Kehidupan
                                Berkoperasi
                            </option>
                            <option value="Kelestarian Lingkungan Hidup">Kelestarian Lingkungan Hidup</option>
                            <option value="Perencanaan Sehat">Perencanaan Sehat</option>
                        </select>
                        <span class="text-sm text-danger">
                            @error('program_pokok')
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
                        <button wire:click="closeForm()" type="button" class="btn-secondary">
                            Close
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>