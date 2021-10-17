<div>
    @if (session()->has('validNIK'))
        <div class="block px-4 py-2 my-2 text-white bg-opacity-50 bg-danger rounded-xl">
            {{ session('validNIK') }}
        </div>
    @endif
    @if (session()->has('message'))
        <div class="block px-4 py-2 my-2 text-white bg-opacity-50 bg-success rounded-xl">
            {{ session('message') }}
        </div>
    @endif

    <div class="flex flex-col py-2 divide-y-0 card">
        <div>
            <x-label for="nik" :value="__('Verifikasi NIK')" />

            <x-input wire:model.lazy="nik" id="nik" class="block w-full mt-1" type="text" name="nik" autofocus />
            <span class="text-sm text-danger">
                @error('nik')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="mt-4">
            <button wire:click='cekNik' class="btn-primary" type="submit">submit</button>
        </div>
        @if ($penduduk)
            {{-- <div class="w-full overflow-x-auto">
                <table class="min-w-full mt-2 divide-y divide-gray-200 table-auto">
                    <thead class="bg-gray-50">
                        <tr class="">
                            <th scope="col"
                                class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Nama
                            </th>
                            <th scope="col"
                                class="w-2/12 px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Alamat
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Dusun
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Jenis Kelamin
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Tempat Lahir
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Agama
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Status Perkawinan
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Pendidikan
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Pekerjaan
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @if ($penduduk->count() !== null)

                            @foreach ($penduduk as $p)
                                <tr>

                                    <td class="px-2 md:px-6">
                                        {{ $p->Nama_Lengkap }}
                                    </td>
                                    <td class="px-2 md:px-6">
                                        {{ $p->alamat }}
                                    </td>
                                    <td class="px-2 md:px-6">
                                        {{ $p->dusun }}
                                    </td>
                                    <td class="px-2 md:px-6">
                                        {{ $p->Jenis_Kelamin }}
                                    </td>
                                    <td class="px-2 md:px-6">
                                        {{ $p->Tempat_Lahir }}
                                    </td>
                                    <td class="px-2 md:px-6">
                                        {{ $p->Tgl_Lahir }}
                                    </td>
                                    <td class="px-2 md:px-6">
                                        {{ $p->Agama }}
                                    </td>
                                    <td class="px-2 md:px-6">
                                        {{ $p->Status_Perkawinan }}
                                    </td>
                                    <td class="px-2 md:px-6">
                                        {{ $p->Pendidikan_Terakhir }}
                                    </td>
                                    <td class="px-2 md:px-6">
                                        {{ $p->Pekerjaan }}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        <!-- More people... -->
                    </tbody>
                </table>
            </div> --}}
        @endif

    </div>

    <div class="flex flex-row items-start mt-4 space-x-4">
        @if ($penduduk)

            <div class="flex-1 py-2 card">
                <h1 class="py-2">Form Data Warga</h1>
                <div class="py-2">

                    <input type="hidden" wire:model.defer='warga_id' name="warga_id" id="warga_id">
                    {{-- No Dasawisma --}}
                    <div class="mt-4">
                        <x-label for="no_dasawisma" :value="__('Nomor Dasawisma')" />

                        <x-input wire:model.defer="no_dasawisma" id="no_dasawisma" disabled="{{ $isDisable }}"
                            class="block w-full mt-1 text-sm" type="text" name="no_dasawisma" autofocus />
                        <span class="text-sm text-danger">
                            @error('no_dasawisma')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- No Registrasi --}}
                    <div class="mt-4">
                        <x-label for="no_reg" :value="__('Nomor Registrasi')" />

                        <x-input wire:model.defer="no_reg" id="no_reg" disabled="{{ $isDisable }}"
                            class="block w-full mt-1 text-sm" type="text" name="no_reg" autofocus />
                        <span class="text-sm text-danger">
                            @error('no_reg')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- Akseptor KB --}}
                    <div class="mt-4">
                        <x-label for="akseptor_kb" :value="__('Akseptor KB')" />
                        <select wire:model.defer='akseptor_kb' name="akseptor_kb" id="akseptor_kb"
                            class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
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

                    {{-- Kegiatan Posyandu --}}
                    <div class="mt-4">
                        <x-label for="kegiatan_posyandu" :value="__('Aktif Dalam Kegiatan Posyandu')" />
                        <select wire:model.defer='kegiatan_posyandu' name="kegiatan_posyandu" id="kegiatan_posyandu"
                            class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
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

                    {{-- Program BKB --}}
                    <div class="mt-4">
                        <x-label for="program_bkb" :value="__('Mengikuti Program Bina Balita')" />
                        <select wire:model.defer='program_bkb' name="program_bkb" id="program_bkb"
                            class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
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

                    {{-- Tabungan --}}
                    <div class="mt-4">
                        <x-label for="tabungan" :value="__('Memiliki Tabungan')" />
                        <select wire:model.defer='tabungan' name="tabungan" id="tabungan"
                            class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
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

                    {{-- Kelompok Belajar --}}
                    <div class="mt-4">
                        <x-label for="kelompok_belajar" :value="__('Mengikuti Kelompok Belajar')" />
                        <select wire:model.defer='kelompok_belajar' name="kelompok_belajar" id="kelompok_belajar"
                            class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
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

                    {{-- Paud --}}
                    <div class="mt-4">
                        <x-label for="paud" :value="__('Mengikuti Paud/Sejenis')" />
                        <select wire:model.defer='paud' name="paud" id="paud"
                            class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
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


                    {{-- Kegiatan Koperasi --}}
                    <div class="mt-4">
                        <x-label for="kegiatan_koperasi" :value="__('Ikut Dalam Kegiatan Koperasi')" />
                        <select wire:model.defer='kegiatan_koperasi' name="kegiatan_koperasi" id="kegiatan_koperasi"
                            class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
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

                    <div class="mt-4">
                        <x-button wire:click="storeWarga" class="text-sm" type="submit">
                            {{ __('Save') }}
                        </x-button>
                    </div>

                </div>
            </div>

            <div class="flex-1 py-2 card">
                <h1 class="py-2">Form Data Keluarga</h1>
                <div class="py-2">

                    <input type="hidden" wire:model.defer='keluarga_id' name="warga_id" id="warga_id">

                    {{-- Jumlah Anggota Keluarga --}}
                    <div class="mt-4">
                        <x-label for="jumlah_AK" :value="__('Jumlah Anggota Keluarga')" />

                        <x-input wire:model.defer="jumlah_AK" id="jumlah_AK" class="block w-full mt-1 text-sm"
                            type="text" name="jumlah_AK" autofocus />
                        <span class="text-sm text-danger">
                            @error('jumlah_AK')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    {{-- Jumlah Kepala Keluarga --}}
                    <div class="mt-4">
                        <x-label for="jumlah_KK" :value="__('Jumlah KK')" />

                        <x-input wire:model.defer="jumlah_KK" id="jumlah_KK" class="block w-full mt-1 text-sm"
                            type="text" name="jumlah_KK" autofocus />
                        <span class="text-sm text-danger">
                            @error('jumlah_KK')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- Balita --}}
                    <div class="mt-4">
                        <x-label for="balita" :value="__('Balita')" />

                        <x-input wire:model.defer="balita" id="balita" class="block w-full mt-1 text-sm" type="text"
                            name="balita" autofocus />
                        <span class="text-sm text-danger">
                            @error('balita')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- PUS --}}
                    <div class="mt-4">
                        <x-label for="pus" :value="__('PUS')" />

                        <x-input wire:model.defer="pus" id="pus" class="block w-full mt-1 text-sm" type="text"
                            name="pus" autofocus />
                        <span class="text-sm text-danger">
                            @error('pus')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- WUS --}}
                    <div class="mt-4">
                        <x-label for="pus" :value="__('WUS')" />

                        <x-input wire:model.defer="wus" id="wus" class="block w-full mt-1 text-sm" type="text"
                            name="wus" autofocus />
                        <span class="text-sm text-danger">
                            @error('wus')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- Buta --}}
                    <div class="mt-4">
                        <x-label for="buta" :value="__('Buta')" />

                        <x-input wire:model.defer="buta" id="buta" class="block w-full mt-1 text-sm" type="text"
                            name="buta" autofocus />
                        <span class="text-sm text-danger">
                            @error('buta')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- Ibu Hamil --}}
                    <div class="mt-4">
                        <x-label for="ibu_hamil" :value="__('Ibu Hamil')" />

                        <x-input wire:model.defer="ibu_hamil" id="ibu_hamil" class="block w-full mt-1 text-sm"
                            type="text" name="ibu_hamil" autofocus />
                        <span class="text-sm text-danger">
                            @error('ibu_hamil')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- Ibu Menyesusui --}}
                    <div class="mt-4">
                        <x-label for="ibu_menyusui" :value="__('Ibu Menyesusui')" />

                        <x-input wire:model.defer="ibu_menyusui" id="ibu_menyusui" class="block w-full mt-1 text-sm"
                            type="text" name="ibu_menyusui" autofocus />
                        <span class="text-sm text-danger">
                            @error('ibu_menyusui')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- Lansia --}}
                    <div class="mt-4">
                        <x-label for="lansia" :value="__('Lansia')" />

                        <x-input wire:model.defer="lansia" id="lansia" class="block w-full mt-1 text-sm" type="text"
                            name="lansia" autofocus />
                        <span class="text-sm text-danger">
                            @error('lansia')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- Makanan Pokok Sehari-hari --}}
                    <div class="mt-4">
                        <x-label for="makanan_pokok" :value="__('Makanan Pokok Sehari-hari')" />
                        <select wire:model.defer='makanan_pokok' name="makanan_pokok" id="makanan_pokok"
                            class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            <option value="">-- Pilih --</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                        <span class="text-sm text-danger">
                            @error('makanan_pokok')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- Mempunyai Jamban Keluarga --}}
                    <div class="mt-4">
                        <x-label for="jamban_keluarga" :value="__('Mempunyai Jamban Keluarga')" />
                        <select wire:model.defer='jamban_keluarga' name="jamban_keluarga" id="jamban_keluarga"
                            class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
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


                    {{-- Sumber Air Keluarga --}}
                    <div class="mt-4">
                        <x-label for="sumber_air" :value="__('Sumber Air Keluarga')" />
                        <select wire:model.defer='sumber_air' name="sumber_air" id="sumber_air"
                            class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            <option value="">-- Pilih --</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                        <span class="text-sm text-danger">
                            @error('sumber_air')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- Mempunyai Tempat Pembuangan Sampah --}}
                    <div class="mt-4">
                        <x-label for="pembuangan_sampah" :value="__('Mempunyai Tempat Pembuangan Sampah')" />
                        <select wire:model.defer='pembuangan_sampah' name="pembuangan_sampah" id="pembuangan_sampah"
                            class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
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

                    {{-- Mempunyai Saluran Pembuangan Air Limbah --}}
                    <div class="mt-4">
                        <x-label for="pembuangan_air_limbah" :value="__('Mempunyai Saluran Pembuangan Air Limbah')" />
                        <select wire:model.defer='pembuangan_air_limbah' name="pembuangan_air_limbah"
                            id="pembuangan_air_limbah"
                            class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
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

                    {{-- Menempel Stiker PKK --}}
                    <div class="mt-4">
                        <x-label for="stiker_pkk" :value="__('Menempel Stiker PKK')" />
                        <select wire:model.defer='stiker_pkk' name="stiker_pkk" id="stiker_pkk"
                            class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
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

                    {{-- Kriteria Rumah --}}
                    <div class="mt-4">
                        <x-label for="kriteria_rumah" :value="__('Kriteria Rumah')" />
                        <select wire:model.defer='kriteria_rumah' name="kriteria_rumah" id="kriteria_rumah"
                            class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            <option value="">-- Pilih --</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                        <span class="text-sm text-danger">
                            @error('kriteria_rumah')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- Aktivitas UP2K --}}
                    <div class="mt-4">
                        <x-label for="up2k" :value="__('Aktivitas UP2K')" />
                        <select wire:model.defer='up2k' name="up2k" id="up2k"
                            class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
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

                    {{-- Aktivitas Kegiatan Usaha Kesehatan Lingkungan --}}
                    <div class="mt-4">
                        <x-label for="usaha_kesehatan_lingkungan"
                            :value="__('Aktivitas Kegiatan Usaha Kesehatan Lingkungan')" />
                        <select wire:model.defer='usaha_kesehatan_lingkungan' name="usaha_kesehatan_lingkungan"
                            id="usaha_kesehatan_lingkungan"
                            class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
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

                    <div class="mt-4">
                        <x-button wire:click="storeKeluarga" class="text-sm" type="submit">
                            {{ __('Save') }}
                        </x-button>
                    </div>



                </div>
            </div>
        @endif

        {{-- <div class="flex-1"></div> --}}
    </div>


</div>
