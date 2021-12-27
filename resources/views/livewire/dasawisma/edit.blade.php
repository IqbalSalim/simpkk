<div class="py-12 md:px-8">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Dasawisma') }}
        </h2>
    </x-slot>

    <div class="px-4 py-2 mt-4 bg-white divide-y-2 divide-gray-200 rounded-lg shadow-lg ">
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
        </div>
    </div>

    <div class="px-4 py-2 mt-4 bg-white divide-y-2 divide-gray-200 rounded-lg shadow-lg">
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

                    <x-input wire:model.defer="ibu_hamil" id="ibu_hamil" class="block w-full mt-1 text-sm" type="number"
                        min="0" name="ibu_hamil" autofocus />
                    <span class="text-sm text-danger">
                        @error('ibu_hamil')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-4">
                    <x-label for="ibu_menyusui" :value="__('Ibu Menyusui')" />

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
                <button wire:click.prevent='update' class="text-sm btn-primary" type="submit">Simpan Perubahan</button>
                <a href="{{ route('dasawisma') }}" class="text-sm btn-secondary">Batal</a>
            </div>
        </div>
    </div>

</div>
