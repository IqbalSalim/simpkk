<x-guest-layout>
    <div class="px-4 py-12 md:px-12">
        @php
            $request = request();
            if ($request->has('q')) {
            $q = request()->q;
            }else {
            $q='program-kerja';
            }
        @endphp

        <div class="px-4 pt-4 bg-white rounded-lg shadow-lg " x-data="{
selected: '{{ $q }}',
activeClasses: 'border-b-2 text-primary border-primary',
inactiveClasses: 'opacity-50 hover:opacity-100'}">

            <ul
                class="flex flex-col items-center w-full px-1 py-2 space-y-2 text-sm font-semibold capitalize border-b-2 border-gray-100 md:items-center md:space-x-6 md:flex-row md:space-y-0 md:text-base text-default">
                <li class="">
                    <a href="#sejarah-desa" x-on:click="selected = 'program-kerja'" :class="
        selected === 'program-kerja' ? activeClasses : inactiveClasses">program kerja</a>
                </li>
                <li class="">
                    <a href="#struktur-organisasi" x-on:click="selected = 'struktur-organisasi'" :class="
        selected === 'struktur-organisasi' ? activeClasses : inactiveClasses">sruktur organisasi</a>
                </li>
                <li class="">
                    <a href="#perangkat-desa" x-on:click="selected = '10program-pokok'" :class="
        selected === '10program-pokok' ? activeClasses : inactiveClasses">10 program pokok</a>
                </li>
            </ul>




            <div x-show="selected === 'program-kerja'" class="p-4">
                Program Kerja
            </div>
            <div x-show="selected === 'struktur-organisasi'" class="p-4">
                <div>
                    <img src="{{ asset('images/STRUKTUR.jpeg') }}" alt="">
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
                        <li>Keseharan</li>
                        <li>Pengembangan Kehidupan Berkoperasi</li>
                        <li>Kelestarian Lingkungan Hidup</li>
                        <li>Perencanaan Sehat</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
