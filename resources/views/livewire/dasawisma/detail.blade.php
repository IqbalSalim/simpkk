<div class="py-12 md:px-8">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Detail Dasawisma') }}
        </h2>
    </x-slot>
    <div class="px-4 py-2 mt-4 bg-white divide-y-2 divide-gray-200 rounded-lg shadow-lg">
        <div class="flex flex-row py-2 space-x-4">
        </div>
        <div class="flex flex-row justify-between py-2">
            <a href="{{route('dasawisma') }}" type="button" class="text-sm btn-danger">Kembali</a>
            <button onclick="window.print();return false;" class="text-sm btn-primary">Cetak</button>
        </div>
        <div>
            <div class="w-full overflow-x-auto">
                <table class="min-w-full mt-2 divide-y divide-gray-200 table-auto">
                    <thead class="bg-gray-50">
                        <tr class="">
                            <th scope="col"
                                class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                NIK
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Nama Lengkap
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Alamat
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Dusun
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $penduduk->NIK }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $penduduk->Nama_Lengkap }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $penduduk->alamat }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $penduduk->dusun }}
                            </td>
                        </tr>
                        <!-- More people... -->
                    </tbody>
                </table>


            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div class="px-4 py-2 mt-4 bg-white divide-y-2 divide-gray-200 rounded-lg shadow-lg">
            <div class="py-2">
                <h2 class="font-medium text-default">Tabel Warga</h2>
            </div>
            <div class="py-2">
                <table class="min-w-full mt-2 table-auto">
                    <tbody class="divide-y-2 divide-gray-200">
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Nama Kepala Keluarga</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $warga->nama_krt }}</td>
                        </tr>
                        <tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">No Dasawisma</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $warga->no_dasawisma }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">No Registrasi</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">{{ $warga->no_reg }}
                                </td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Akseptor KB</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $warga->akseptor_kb }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Aktif Dalam Kegiatan Posyandu</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $warga->kegiatan_posyandu }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Mengikuti Program Bina Balita</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $warga->program_bkb }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Memiliki Tabungan</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $warga->tabungan }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Mengikuti Kelompok Belajar</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $warga->kelompok_belajar }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Mengikuti Paud/Sejenis</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">{{ $warga->paud }}
                                </td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Ikut Dalam Kegiatan Koperasi</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $warga->kegiatan_koperasi }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="px-4 py-2 mt-4 bg-white divide-y-2 divide-gray-200 rounded-lg shadow-lg">
            <div class="py-2">
                <h2 class="font-medium text-default">Tabel Keluarga</h2>
            </div>
            <div class="py-2">
                <table class="min-w-full mt-2 table-auto">
                    <tbody class="divide-y-2 divide-gray-200">
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Jumlah Anggota Keluarga</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $keluarga->jumlah_AK }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Jumlah KK</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $keluarga->jumlah_KK }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Balita</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $keluarga->balita }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">PUS</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">{{ $keluarga->pus }}
                                </td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">WUS</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">{{ $keluarga->wus }}
                                </td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Buta</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $keluarga->buta }}
                                </td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Ibu Hamil</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $keluarga->ibu_hamil }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Ibu Menyusui</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $keluarga->ibu_menyusui }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Lansia</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $keluarga->lansia }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Makanan Pokok Sehari-hari</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $keluarga->makanan_pokok }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Mempunyai Jamban Keluarga</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $keluarga->jamban_keluarga }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Sumber Air Keluarga</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $keluarga->sumber_air }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Mempunyai Tempat Pembuangan Sampah</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $keluarga->pembuangan_sampah }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Mempunyai Saluran Pembuangan Air Limbah</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $keluarga->pembuangan_air_limbah }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Menempel Stiker PKK</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $keluarga->stiker_pkk }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Kriteria Rumah</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $keluarga->kriteria_rumah }}</td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Aktivitas UP2K</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $keluarga->up2k }}
                                </td>
                        </tr>
                        <tr>
                            <th class="w-6/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50 md:px-6"">Aktivitas Kegiatan Usaha Kesehatan Lingkungan</th>
                        <td class=" px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $keluarga->usaha_kesehatan_lingkungan }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>