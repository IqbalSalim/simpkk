<div class="py-12 md:px-8">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Program Kerja') }}
        </h2>
    </x-slot>
    <div class="px-4 py-2 bg-white rounded-lg shadow-lg" x-data="{ modal: @entangle('modal').defer }"
        x-on:close-modal.window="modal = false" x-on:close-modal-edit.window="modalEdit = false">
        <div
            class="flex flex-row items-center justify-between py-2 font-semibold text-gray-700 border-b-2 border-gray-300">
            <div>
                <h2>Daftar Program Kerja</h2>
            </div>
            <div>
                <button class="btn-primary" @click="modal = true">Tambah Program Kerja</button>

            </div>
        </div>
        <div class="py-4">
            {{-- Form Tambah User --}}



            <!-- Dialog (full screen) -->
            <form wire:submit.prevent='{{ $event }}' novalidate>
                @csrf
                <div class="fixed inset-0 z-50 flex justify-center w-full py-4 bg-black bg-opacity-40" x-show="modal">

                    <!-- A basic modal dialog with title, body and one button to close -->

                    <div @click.away="modal = false" @click.away="{{ $this->resetErrorBag() }}" x-show="modal"
                        x-transition.duration.500
                        class="flex flex-col w-11/12 h-auto p-4 mx-2 text-left bg-white divide-y-2 divide-gray-300 rounded shadow-xl">




                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">
                                Form Program Kerja
                            </h3>

                            <div class="mt-2">
                                <p class="text-sm leading-5 text-primary">
                                    @if ($event === 'store')
                                        silahkan isi data program kerja
                                    @else
                                        silahkan edit data program kerja
                                    @endif
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col flex-1 px-4 py-2 overflow-auto h-96">
                            <input type="hidden" wire:model="proker_id">
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

                                <x-input wire:model.defer="tujuan" id="tujuan" class="block w-full mt-1 text-sm"
                                    type="text" name="tujuan" autofocus />
                                <span class="text-sm text-danger">
                                    @error('tujuan')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- sasaran -->
                            <div class="mt-4">
                                <x-label for="sasaran" :value="__('sasaran')" />

                                <x-input wire:model.defer="sasaran" id="sasaran" class="block w-full mt-1 text-sm"
                                    type="text" name="sasaran" autofocus />
                                <span class="text-sm text-danger">
                                    @error('sasaran')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- Penanggungjawab -->
                            <div class="mt-4">
                                <x-label for="pj" :value="__('Penanggung Jawab')" />

                                <x-input wire:model.defer="pj" id="pj" class="block w-full mt-1 text-sm" type="text"
                                    name="pj" autofocus />
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
                                <button wire:click="resetInput()" type="button" @click="modal = false"
                                    class="btn-secondary">
                                    Close
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

            @if (session()->has('message'))
                <div class="block px-4 py-2 my-2 text-white bg-opacity-50 bg-success rounded-xl">
                    {{ session('message') }}
                </div>
            @endif
            {{-- End Form Tambah User --}}
            <div class="flex flex-row items-center justify-between">
                <div>
                    <select name="paginate" id="paginate" wire:model="paginate"
                        class="block w-full text-sm capitalize border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                    </select>
                </div>
                <div class="md:w-3/12">
                    <x-input wire:model="search" id="search" class="block w-full text-sm" placeholder="Search..."
                        type="text" name="search" autofocus />
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

                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                <span class="sr-only">Edit</span>
                                <span class="sr-only">Hapus</span>
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
                                <td class="px-2 md:px-6">
                                    <div class="flex flex-row items-center space-x-4">
                                        <button @click="modal = true" wire:click="getProker({{ $proker->id }})"
                                            type="button" class="text-sm btn-secondary">edit</button>
                                        <button wire:click="delete({{ $proker->id }})" type="button"
                                            class="text-sm btn-danger">hapus</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        <!-- More people... -->
                    </tbody>
                </table>
            </div>
            {{ $prokers->links() }}

        </div>

    </div>
</div>
