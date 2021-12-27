<div>
    <div class="px-4 py-12 md:px-12">
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Struktur Organisasi') }}
            </h2>
        </x-slot>
        <div class="">
            @php
                $request = request();
                if ($request->has('q')) {
                    $q = request()->q;
                } else {
                    $q = 'program-kerja';
                }
            @endphp

            <div class="px-4 pt-4 bg-white rounded-lg shadow-lg " x-data="{
selected: '{{ $q }}',
activeClasses: 'border-b-2 text-primary border-primary',
inactiveClasses: 'opacity-50 hover:opacity-100'}">

                <ul
                    class="flex flex-col items-center w-full px-1 py-2 space-y-2 text-sm font-semibold capitalize border-b-2 border-gray-100 md:items-center md:space-x-6 md:flex-row md:space-y-0 md:text-base text-default">
                    <li class="">
                        <a href="#sejarah-desa" x-on:click="selected = 'program-kerja'"
                            :class="
        selected === 'program-kerja' ? activeClasses : inactiveClasses">program
                            kerja</a>
                    </li>
                    <li class="">
                        <a href="#struktur-organisasi" x-on:click="selected = 'struktur-organisasi'"
                            :class="
        selected === 'struktur-organisasi' ? activeClasses : inactiveClasses">sruktur
                            organisasi</a>
                    </li>
                    <li class="">
                        <a href="#perangkat-desa" x-on:click="selected = '10program-pokok'"
                            :class="
        selected === '10program-pokok' ? activeClasses : inactiveClasses">10
                            program
                            pokok</a>
                    </li>
                </ul>




                <div x-show="selected === 'program-kerja'" class="p-4">
                    <div class="flex flex-row items-center justify-between">
                        <div>
                            <select name="paginate" id="paginate" wire:model="paginate"
                                class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="25">25</option>
                            </select>
                        </div>
                        <div class="md:w-3/12">
                            <x-input wire:model="search" id="search" class="block w-full text-sm"
                                placeholder="Search..." type="text" name="search" autofocus />
                        </div>
                    </div>
                    <div class="w-full overflow-x-auto md:overflow-hidden">
                        <table class="min-w-full mt-2 divide-y divide-gray-200 table-auto">
                            <thead class="bg-gray-50">
                                <tr class="">
                                    <th scope="col"
                                        class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                        #
                                    </th>
                                    <th scope="col"
                                        class="w-2/12 px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                        Program Kegiatan
                                    </th>
                                    <th scope="col"
                                        class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                        Tujuan
                                    </th>
                                    <th scope="col"
                                        class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                        Sasaran
                                    </th>
                                    <th scope="col"
                                        class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                        Penanggungjawab
                                    </th>
                                    <th scope="col"
                                        class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                        Program Pokok
                                    </th>


                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($prokers as $key => $proker)
                                    <tr class="text-sm">
                                        <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                            {{ $key + 1 }}
                                        </td>
                                        <td class="px-2 py-4 md:px-6">
                                            {{ $proker->nama }}
                                        </td>
                                        <td class="px-2 md:px-6">
                                            {{ $proker->tujuan }}
                                        </td>
                                        <td class="px-2 md:px-6">
                                            {{ $proker->sasaran }}
                                        </td>
                                        <td class="px-2 md:px-6">
                                            {{ $proker->pj }}
                                        </td>
                                        <td class="px-2 md:px-6">
                                            {{ $proker->program_pokok }}
                                        </td>

                                    </tr>
                                @endforeach
                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                    {{ $prokers->links() }}
                </div>
                <div x-show="selected === 'struktur-organisasi'" class="p-4">
                    <div>
                        <img src="{{ asset('storage/' . $struktur->gambar) }}" alt="Gambar Strultur Organisasi">
                    </div>
                </div>

                <div x-show="selected === '10program-pokok'" class="p-4">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="text-2xl text-primary">10 Program Pokok PKK</h1>
                        <ul class="list-decimal text-default">
                            <li>Penghayatan dan Pengamalan Pancasila</li>
                            <li>Gotong Royong</li>
                            <li>Pangan</li>
                            <li>Sandang</li>
                            <li>Perumahan dan Tata Laksana Rumah Tangga</li>
                            <li>Pendidikan dan Ketrampilan</li>
                            <li>Kesehatan</li>
                            <li>Pengembangan Kehidupan Berkoperasi</li>
                            <li>Kelestarian Lingkungan Hidup</li>
                            <li>Perencanaan Sehat</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    </div>
</div>
