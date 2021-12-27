<div class="py-12 md:px-8">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Tambah Dasawisma') }}
        </h2>
    </x-slot>
    <div class="w-full py-4">
        <div class="flex">
            <div class="w-1/4">
                <div class="relative mb-2">
                    <div class="flex items-center w-10 h-10 mx-auto text-lg text-white rounded-full bg-primary">
                        <span class="w-full text-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-full" fill="none" width="24"
                                height="24" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="text-xs text-center md:text-base">Validasi NIK</div>
            </div>

            <div class="w-1/4">
                <div class="relative mb-2">
                    <div class="absolute flex items-center content-center align-middle align-center"
                        style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                        <div class="flex-1 w-full align-middle bg-gray-200 rounded item-center align-center">
                            <div class="w-0 py-1  rounded {{ $currentStep >= 2 ? 'bg-blue-400' : 'bg-gray-200' }}"
                                style="width: 100%"></div>
                        </div>
                    </div>

                    <div
                        class="flex items-center w-10 h-10 mx-auto text-lg text-white rounded-full {{ $currentStep >= 2 ? 'bg-primary' : 'bg-gray-200' }}">
                        <span class="w-full text-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-full" fill="none" width="24"
                                height="24" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="text-xs text-center md:text-base">Form Warga</div>
            </div>

            <div class="w-1/4">
                <div class="relative mb-2">
                    <div class="absolute flex items-center content-center align-middle align-center"
                        style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                        <div class="flex-1 w-full align-middle bg-gray-200 rounded item-center align-center">
                            <div class="w-0 py-1 rounded {{ $currentStep >= 3 ? 'bg-blue-400' : 'bg-gray-200' }}"
                                style="width: 100%"></div>
                        </div>
                    </div>

                    <div
                        class="flex items-center w-10 h-10 mx-auto text-lg text-white rounded-full {{ $currentStep >= 3 ? 'bg-primary' : 'bg-gray-200' }}">
                        <span class="w-full text-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-full" witdh="24" height="24"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                                <path fill-rule="evenodd"
                                    d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="text-xs text-center md:text-base">Form Keluarga</div>
            </div>

            <div class="w-1/4">
                <div class="relative mb-2">
                    <div class="absolute flex items-center content-center align-middle align-center"
                        style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                        <div class="flex-1 w-full align-middle bg-gray-200 rounded item-center align-center">
                            <div class="w-0 py-1  rounded {{ $currentStep != 4 ? 'bg-gray-200' : 'bg-blue-400' }}"
                                style="width: 100%"></div>
                        </div>
                    </div>

                    <div
                        class="flex items-center w-10 h-10 mx-auto text-lg text-white rounded-full {{ $currentStep != 4 ? 'bg-gray-200' : 'bg-primary' }}">
                        <span class="w-full text-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-full" width="24" height="24"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="text-xs text-center md:text-base">Selesai</div>
            </div>

        </div>
    </div>
    <div
        class=" px-4 py-2 mt-4 bg-white divide-y-2 divide-gray-200 rounded-lg shadow-lg {{ $currentStep != 1 ? 'hidden' : '' }}">
        <div class="py-2">
            <div class="mt-4">
                <x-label for="nik" :value="__('Masukkan NIK')" />

                <x-input wire:model.defer="nik" id="nik" class="block w-full mt-1" type="text" name="nik" autofocus />
                <span class="text-sm text-danger">
                    @error('nik')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="flex-row mt-4 space-x-4">
                <button wire:click='firstStepSubmit' class="text-sm btn-primary">Next</button>
            </div>
        </div>
    </div>

    <div
        class="px-4 py-2 mt-4 bg-white divide-y-2 divide-gray-200 rounded-lg shadow-lg {{ $currentStep != 2 ? 'hidden' : '' }}">
        <div class="py-2">
            <h2 class="font-medium text-default">Form Warga</h2>
        </div>
        <div class="py-2">
            <div class="grid gap-5 md:grid-cols-4">
                <div class="mt-4">
                    <x-label for="nama" :value="__('Nama Lengkap')" />

                    <x-input wire:model.defer="nama" id="nama" class="block w-full mt-1 text-sm bg-gray-50" type="text"
                        name="nama" readonly />
                </div>
                <div class="mt-4">
                    <x-label for="no_dasawisma" :value="__('Nomor Dasawisma')" />

                    <x-input wire:model.defer="no_dasawisma" id="no_dasawisma" class="block w-full mt-1 text-sm"
                        type="text" name="no_dasawisma" autofocus />
                    <span class="text-sm text-danger">
                        @error('no_dasawisma')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="no_reg" :value="__('Nomor Registrasi')" />

                    <x-input wire:model.defer="no_reg" id="no_reg" class="block w-full mt-1 text-sm" type="text"
                        name="no_reg" autofocus />
                    <span class="text-sm text-danger">
                        @error('no_reg')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="akseptor_kb" :value="__('Akseptor KB')" />
                    <select wire:model.defer='akseptor_kb' name="akseptor_kb" id="akseptor_kb"
                        class="block w-full mt-1 text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="">-- Pilih --</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    <span class="text-sm text-danger">
                        @error('akseptor_kb')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="kegiatan_posyandu" :value="__('Aktif Dalam Kegiatan Posyandu')" />
                    <select wire:model.defer='kegiatan_posyandu' name="kegiatan_posyandu" id="kegiatan_posyandu"
                        class="block w-full mt-1 text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="">-- Pilih --</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    <span class="text-sm text-danger">
                        @error('kegiatan_posyandu')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="program_bkb" :value="__('Mengikuti Program Bina Balita')" />
                    <select wire:model.defer='program_bkb' name="program_bkb" id="program_bkb"
                        class="block w-full mt-1 text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="">-- Pilih --</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    <span class="text-sm text-danger">
                        @error('program_bkb')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="tabungan" :value="__('Memiliki Tabungan')" />
                    <select wire:model.defer='tabungan' name="tabungan" id="tabungan"
                        class="block w-full mt-1 text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="">-- Pilih --</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    <span class="text-sm text-danger">
                        @error('tabungan')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="kelompok_belajar" :value="__('Mengikuti Kelompok Belajar')" />
                    <select wire:model.defer='kelompok_belajar' name="kelompok_belajar" id="kelompok_belajar"
                        class="block w-full mt-1 text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="">-- Pilih --</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    <span class="text-sm text-danger">
                        @error('kelompok_belajar')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="paud" :value="__('Mengikuti Paud/Sejenis')" />
                    <select wire:model.defer='paud' name="paud" id="paud"
                        class="block w-full mt-1 text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="">-- Pilih --</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    <span class="text-sm text-danger">
                        @error('paud')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="kegiatan_koperasi" :value="__('Ikut Dalam Kegiatan Koperasi')" />
                    <select wire:model.defer='kegiatan_koperasi' name="kegiatan_koperasi" id="kegiatan_koperasi"
                        class="block w-full mt-1 text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="">-- Pilih --</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    <span class="text-sm text-danger">
                        @error('kegiatan_koperasi')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="flex flex-row items-center mt-4 space-x-4">
                <button wire:click='secondStepSubmit' class="text-sm btn-primary" type="submit">Next</button>
                <button wire:click='back(1)' class="text-sm btn-secondary">Back</button>
            </div>
        </div>
    </div>

    <div
        class="px-4 py-2 mt-4 bg-white divide-y-2 divide-gray-200 rounded-lg shadow-lg {{ $currentStep != 3 ? 'hidden' : '' }}">
        <div class="py-2">
            <h2 class="font-medium text-default">Form Keluarga</h2>
        </div>
        <div class="py-2">
            <div class="grid gap-5 md:grid-cols-5">
                <div class="mt-4">
                    <x-label for="jumlah_AK" :value="__('Jumlah Anggota Keluarga')" />

                    <x-input wire:model.defer="jumlah_AK" id="jumlah_AK" class="block w-full mt-1 text-sm" type="number"
                        min="0" name="jumlah_AK" autofocus />
                    <span class="text-sm text-danger">
                        @error('jumlah_AK')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="jumlah_KK" :value="__('Jumlah KK')" />

                    <x-input wire:model.defer="jumlah_KK" id="jumlah_KK" class="block w-full mt-1 text-sm" type="number"
                        min="0" name="jumlah_KK" autofocus />
                    <span class="text-sm text-danger">
                        @error('jumlah_KK')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="balita" :value="__('Balita')" />

                    <x-input wire:model.defer="balita" id="balita" class="block w-full mt-1 text-sm" type="number"
                        min="0" name="balita" autofocus />
                    <span class="text-sm text-danger">
                        @error('balita')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="pus" :value="__('PUS')" />

                    <x-input wire:model.defer="pus" id="pus" class="block w-full mt-1 text-sm" type="number" min="0"
                        name="pus" autofocus />
                    <span class="text-sm text-danger">
                        @error('pus')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="wus" :value="__('WUS')" />

                    <x-input wire:model.defer="wus" id="wus" class="block w-full mt-1 text-sm" type="number" min="0"
                        name="wus" autofocus />
                    <span class="text-sm text-danger">
                        @error('wus')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="buta" :value="__('Buta')" />

                    <x-input wire:model.defer="buta" id="buta" class="block w-full mt-1 text-sm" type="number" min="0"
                        name="buta" autofocus />
                    <span class="text-sm text-danger">
                        @error('buta')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="ibu_hamil" :value="__('Ibu Hamil')" />

                    <x-input wire:model.defer="ibu_hamil" id="ibu_hamil" class="block w-full mt-1 text-sm"
                        type="number" min="0" name="ibu_hamil" autofocus />
                    <span class="text-sm text-danger">
                        @error('ibu_hamil')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="ibu_menyusui" :value="__('Ibu Menyesusui')" />

                    <x-input wire:model.defer="ibu_menyusui" id="ibu_menyusui" class="block w-full mt-1 text-sm"
                        type="number" min="0" name="ibu_menyusui" autofocus />
                    <span class="text-sm text-danger">
                        @error('ibu_menyusui')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="lansia" :value="__('Lansia')" />

                    <x-input wire:model.defer="lansia" id="lansia" class="block w-full mt-1 text-sm" type="number"
                        min="0" name="lansia" autofocus />
                    <span class="text-sm text-danger">
                        @error('lansia')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="makanan_pokok" :value="__('Makanan Pokok Sehari-hari')" />
                    <select wire:model.defer='makanan_pokok' name="makanan_pokok" id="makanan_pokok"
                        class="block w-full mt-1 text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="">-- Pilih --</option>
                        <option value="Beras">Beras</option>
                        <option value="Non Beras">Non Beras</option>
                    </select>
                    <span class="text-sm text-danger">
                        @error('makanan_pokok')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

            </div>
            <div class="grid gap-5 md:grid-cols-3">
                <div class="mt-4">
                    <x-label for="jamban_keluarga" :value="__('Mempunyai Jamban Keluarga')" />
                    <select wire:model.defer='jamban_keluarga' name="jamban_keluarga" id="jamban_keluarga"
                        class="block w-full mt-1 text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="">-- Pilih --</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    <span class="text-sm text-danger">
                        @error('jamban_keluarga')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="sumber_air" :value="__('Sumber Air Keluarga')" />
                    <select wire:model.defer='sumber_air' name="sumber_air" id="sumber_air"
                        class="block w-full mt-1 text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="">-- Pilih --</option>
                        <option value="PDAM">PDAM</option>
                        <option value="Sumur">Sumur</option>
                        <option value="Sungai">Sungai</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <span class="text-sm text-danger">
                        @error('sumber_air')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="pembuangan_sampah" :value="__('Mempunyai Tempat Pembuangan Sampah')" />
                    <select wire:model.defer='pembuangan_sampah' name="pembuangan_sampah" id="pembuangan_sampah"
                        class="block w-full mt-1 text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="">-- Pilih --</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    <span class="text-sm text-danger">
                        @error('pembuangan_sampah')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="pembuangan_air_limbah" :value="__('Mempunyai Saluran Pembuangan Air Limbah')" />
                    <select wire:model.defer='pembuangan_air_limbah' name="pembuangan_air_limbah"
                        id="pembuangan_air_limbah"
                        class="block w-full mt-1 text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="">-- Pilih --</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    <span class="text-sm text-danger">
                        @error('pembuangan_air_limbah')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="stiker_pkk" :value="__('Menempel Stiker PKK')" />
                    <select wire:model.defer='stiker_pkk' name="stiker_pkk" id="stiker_pkk"
                        class="block w-full mt-1 text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="">-- Pilih --</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    <span class="text-sm text-danger">
                        @error('stiker_pkk')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="kriteria_rumah" :value="__('Kriteria Rumah')" />
                    <select wire:model.defer='kriteria_rumah' name="kriteria_rumah" id="kriteria_rumah"
                        class="block w-full mt-1 text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="">-- Pilih --</option>
                        <option value="Sehat">Sehat</option>
                        <option value="Kurang Sehat">Kurang Sehat</option>
                    </select>
                    <span class="text-sm text-danger">
                        @error('kriteria_rumah')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="up2k" :value="__('Aktivitas UP2K')" />
                    <select wire:model.defer='up2k' name="up2k" id="up2k"
                        class="block w-full mt-1 text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="">-- Pilih --</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    <span class="text-sm text-danger">
                        @error('up2k')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="usaha_kesehatan_lingkungan"
                        :value="__('Aktivitas Kegiatan Usaha Kesehatan Lingkungan')" />
                    <select wire:model.defer='usaha_kesehatan_lingkungan' name="usaha_kesehatan_lingkungan"
                        id="usaha_kesehatan_lingkungan"
                        class="block w-full mt-1 text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="">-- Pilih --</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    <span class="text-sm text-danger">
                        @error('usaha_kesehatan_lingkungan')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="flex flex-row mt-4 space-x-4">
                <button wire:click='thirdStepSubmit' class="text-sm btn-primary" type="submit">Next</button>
                <button wire:click='back(2)' class="text-sm btn-secondary">Back</button>
            </div>
        </div>
    </div>

    <div
        class="px-4 py-2 mt-4 bg-white divide-y-2 divide-gray-200 rounded-lg shadow-lg {{ $currentStep != 4 ? 'hidden' : '' }}">
        <div class="py-2">
            <h2 class="font-medium text-center text-success">Data Dasawisma Berhasil ditambahkan..</h2>
            <div class="flex flex-row justify-center mt-4 space-x-4 item-center">
                <a href="{{ route('dasawisma.create') }}" class="text-sm btn-primary" type="submit">Tambah
                    Dasawisma</a>
                <a href="{{ route('dasawisma') }}" class="text-sm btn-secondary">Daftar Dasawisma</a>
            </div>
        </div>
    </div>
</div>
