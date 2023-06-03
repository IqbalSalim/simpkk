<div class="py-12 md:px-8">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Laporan') }}
        </h2>
    </x-slot>
    <div class="px-4 py-2 mt-4 bg-white divide-y-2 divide-gray-200 rounded-lg shadow-lg">
        <div
            class="flex flex-row items-center justify-between py-2 font-semibold text-gray-700 border-b-2 border-gray-300">
            <div>
                <h2>Data Keluarga</h2>
            </div>
        </div>
        <div>
            <div class="w-full overflow-x-auto">
                <table class="min-w-full mt-2 divide-y divide-gray-200 table-auto">
                    <thead class="bg-gray-50">
                        <tr class="">
                            <th scope="col"
                                class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Dusun
                            </th>
                            <th scope="col"
                                class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Kepala Keluarga
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Balita
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                PUS
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                WUS
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Buta
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Ibu Hamil
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Ibu Menyusui
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Lansia
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Mempunyai Jamban Keluarga
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Mempunyai Tempat Pembuangan Sampah
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Mempunyai Saluran Pembuangan Air Limbah
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Menempel Stiker PKK
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Aktivitas UP2K
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Aktivitas Kegiatan Usaha Kesehatan Lingkungan
                            </th>
                        </tr>
                    </thead>


                    <tbody class="bg-white divide-y divide-gray-200">
                        @php
                        $jumlah_KK = 0;
                        $balita = 0;
                        $pus = 0;
                        $wus = 0;
                        $buta = 0;
                        $ibu_hamil = 0;
                        $ibu_menyusui = 0;
                        $lansia = 0;
                        $jamban = 0;
                        $sampah = 0;
                        $limbah = 0;
                        $stiker = 0;
                        $up2k = 0;
                        $kesling = 0;
                        @endphp
                        @foreach ($keluargas as $row)
                        <tr>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row->dusun == null ? 0 : $row->dusun }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row->jumlah_KK == null ? 0 : $row->jumlah_KK }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row->balita == null ? 0 : $row->balita }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row->pus == null ? 0 : $row->pus }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row->wus == null ? 0 : $row->wus }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row->buta == null ? 0 : $row->buta }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row->ibu_hamil == null ? 0 : $row->ibu_hamil }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row->menyusui == null ? 0 : $row->menyusui }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row->lansia == null ? 0 : $row->lansia }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row->jamban == null ? 0 : $row->jamban }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row->sampah == null ? 0 : $row->sampah }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row->limbah == null ? 0 : $row->limbah }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row->stiker == null ? 0 : $row->stiker }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row->up2k == null ? 0 : $row->up2k }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row->kesling == null ? 0 : $row->kesling }}
                            </td>
                        </tr>
                        @php
                        $jumlah_KK = $jumlah_KK + $row->jumlah_KK;
                        $balita = $balita + $row->balita;
                        $pus = $pus + $row->pus;
                        $wus = $wus + $row->wus;
                        $buta = $buta + $row->buta;
                        $ibu_hamil = $ibu_hamil + $row->ibu_hamil;
                        $ibu_menyusui = $ibu_menyusui + $row->ibu_menyusui;
                        $lansia = $lansia + $row->lansia;
                        $jamban = $jamban + $row->jamban;
                        $sampah = $sampah + $row->sampah;
                        $limbah = $limbah + $row->limbah;
                        $stiker = $stiker + $row->stiker;
                        $up2k = $up2k + $row->up2k;
                        $kesling = $kesling + $row->kesling;
                        @endphp
                        @endforeach
                        <!-- More people... -->
                    </tbody>
                    <tfoot class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-4 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Total
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $jumlah_KK }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $balita }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $pus }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $wus }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $buta }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $ibu_hamil }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $ibu_menyusui }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $lansia }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $jamban }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $sampah }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $limbah }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $stiker }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $up2k }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $kesling }}
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <div class="px-4 py-2 mt-4 bg-white divide-y-2 divide-gray-200 rounded-lg shadow-lg">
        <div
            class="flex flex-row items-center justify-between py-2 font-semibold text-gray-700 border-b-2 border-gray-300">
            <div>
                <h2>Data Kegiatan Warga</h2>
            </div>
        </div>
        <div>
            <div class="w-full overflow-x-auto">
                <table class="min-w-full mt-2 divide-y divide-gray-200 table-auto">
                    <thead class="bg-gray-50">
                        <tr class="">
                            <th scope="col"
                                class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Dusun
                            </th>
                            <th scope="col"
                                class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Jumlah Akseptor KB
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Mengikuti Kegiatan Posyandu
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Program BKB
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Memiliki Tabungan
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Mengikuti Kelompok Belajar
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Mengikuti PAUD / Sejenis
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Ikut Dalam Kegiatan Koperasi
                            </th>
                        </tr>
                    </thead>


                    <tbody class="bg-white divide-y divide-gray-200">
                        @php
                        $akseptor_kb = 0;
                        $kegiatan_posyandu = 0;
                        $program_bkb = 0;
                        $tabungan = 0;
                        $kelompok_belajar = 0;
                        $paud = 0;
                        $kegiatan_koperasi = 0;
                        @endphp
                        @foreach ($wargas as $row)
                        <tr>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row['dusun']== null ? 0 : $row['dusun'] }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row['akseptor_kb']== null ? 0 : $row['akseptor_kb'] }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row['kegiatan_posyandu']== null ? 0 : $row['kegiatan_posyandu'] }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row['program_bkb']== null ? 0 : $row['program_bkb'] }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row['tabungan']== null ? 0 : $row['tabungan'] }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row['kelompok_belajar']== null ? 0 : $row['kelompok_belajar'] }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row['paud']== null ? 0 : $row['paud'] }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $row['kegiatan_koperasi']== null ? 0 : $row['kegiatan_koperasi'] }}
                            </td>
                        </tr>
                        @php
                        $akseptor_kb = $akseptor_kb + $row['akseptor_kb'];
                        $kegiatan_posyandu = $kegiatan_posyandu + $row['kegiatan_posyandu'];
                        $program_bkb = $program_bkb + $row['program_bkb'];
                        $tabungan = $tabungan + $row['tabungan'];
                        $kelompok_belajar = $kelompok_belajar + $row['kelompok_belajar'];
                        $paud = $paud + $row['paud'];
                        $kegiatan_koperasi = $kegiatan_koperasi + $row['kegiatan_koperasi'];
                        @endphp
                        @endforeach
                        <!-- More people... -->
                    </tbody>
                    <tfoot class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-4 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Total
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $akseptor_kb }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $kegiatan_posyandu }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $program_bkb }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $tabungan }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $kelompok_belajar }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $paud }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase md:px-6">
                                {{ $kegiatan_koperasi }}
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>