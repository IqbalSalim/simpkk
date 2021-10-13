<x-guest-layout>
    <div class="px-4 py-12 md:px-12">
        @php
            $request = request();
            if ($request->has('q')) {
            $q = request()->q;
            }else {
            $q='visi-misi';
            }
        @endphp

        <div class="px-4 pt-4 bg-white rounded-lg shadow-lg " x-data="{
selected: '{{ $q }}',
activeClasses: 'border-b-2 text-primary border-primary',
inactiveClasses: 'opacity-50 hover:opacity-100'}">

            <ul
                class="flex flex-col items-center w-full px-1 py-2 space-y-2 text-sm font-semibold capitalize border-b-2 border-gray-100 md:items-center md:space-x-6 md:flex-row md:space-y-0 md:text-base text-default">
                <li class="">
                    <a href="#visi-misi" x-on:click="selected = 'visi-misi'" :class="
            selected === 'visi-misi' ? activeClasses : inactiveClasses">visi misi</a>
                </li>
                <li class="">
                    <a href="#sejarah-desa" x-on:click="selected = 'program-kerja'" :class="
        selected === 'program-kerja' ? activeClasses : inactiveClasses">program kerja</a>
                </li>
                <li class="">
                    <a href="#gambaran-umum" x-on:click="selected = 'struktur-organisasi'" :class="
        selected === 'struktur-organisasi' ? activeClasses : inactiveClasses">sruktur organisasi</a>
                </li>
                <li class="">
                    <a href="#perangkat-desa" x-on:click="selected = '10program-pokok'" :class="
        selected === '10program-pokok' ? activeClasses : inactiveClasses">10 program pokok</a>
                </li>
            </ul>


            <div x-show="selected === 'visi-misi'" class="p-4 text-justify align-baseline text-default">
                <p class="inline pl-8"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, accusamus
                    magnam.
                    Dolorem minima ex dolore officia illum incidunt dolor quo repudiandae, commodi veritatis
                    fugiat non! Quod ex numquam facere id? Lorem ipsum, dolor sit amet consectetur adipisicing
                    elit. At omnis placeat quaerat, provident aliquid accusantium quam velit facere quasi,
                    nostrum obcaecati vero doloribus praesentium perspiciatis itaque iure fugiat neque alias.
                </p>
                <br>
                <p class="inline pl-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, accusamus
                    magnam.
                    Dolorem minima ex dolore officia illum incidunt dolor quo repudiandae, commodi veritatis
                    fugiat non! Quod ex numquam facere id? Lorem ipsum, dolor sit amet consectetur adipisicing
                    elit. At omnis placeat quaerat, provident aliquid accusantium quam velit facere quasi,
                    nostrum obcaecati vero doloribus praesentium perspiciatis itaque iure fugiat neque alias.
                </p>
                <br>
                <p class="inline pl-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, accusamus
                    magnam.
                    Dolorem minima ex dolore officia illum incidunt dolor quo repudiandae, commodi veritatis
                    fugiat non! Quod ex numquam facere id? Lorem ipsum, dolor sit amet consectetur adipisicing
                    elit. At omnis placeat quaerat, provident aliquid accusantium quam velit facere quasi,
                    nostrum obcaecati vero doloribus praesentium perspiciatis itaque iure fugiat neque alias.
                </p>
                <br>
                <p class="inline pl-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, accusamus
                    magnam.
                    Dolorem minima ex dolore officia illum incidunt dolor quo repudiandae, commodi veritatis
                    fugiat non! Quod ex numquam facere id? Lorem ipsum, dolor sit amet consectetur adipisicing
                    elit. At omnis placeat quaerat, provident aliquid accusantium quam velit facere quasi,
                    nostrum obcaecati vero doloribus praesentium perspiciatis itaque iure fugiat neque alias.
                </p>
            </div>

            <div x-show="selected === 'program-kerja'" class="p-4">
                sejarah
            </div>
            <div x-show="selected === 'struktur-organisasi'" class="p-4">
                gambarab
            </div>

            <div x-show="selected === '10program-pokok'" class="p-4">
                perangkat
            </div>
        </div>
    </div>
</x-guest-layout>
