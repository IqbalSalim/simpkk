<div class="px-4 py-2 bg-white rounded-lg shadow-lg" x-data="{ modal: false, modalEdit: false }"
    x-on:close-modal.window="modal = false" x-on:close-modal-edit.window="modalEdit = false">
    <div class="flex flex-row items-center justify-between py-2 font-semibold text-gray-700 border-b-2 border-gray-300">
        <div>
            <h2>Daftar Kegiatan</h2>
        </div>
        <div>
            <button class="btn-primary" @click="modal = true">Tambah Kegiatan</button>

        </div>
    </div>
    <div class="py-4">

        {{-- Form Tambah User --}}

        <!-- Dialog (full screen) -->
        <form wire:submit.prevent='store' novalidate>
            @csrf
            <div class="fixed inset-0 z-50 flex justify-center w-full py-16 bg-black bg-opacity-40" x-show="modal">

                <!-- A basic modal dialog with title, body and one button to close -->

                <div @click.away="modal = false" x-show="modal" x-transition.duration.500
                    class="flex flex-col w-11/12 h-auto p-4 mx-2 text-left bg-white divide-y-2 divide-gray-300 rounded shadow-xl md:w-10/12 lg:w-6/12">


                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            Form User
                        </h3>

                        <div class="mt-2">
                            <p class="text-sm leading-5 text-primary">
                                silahkan isi data kegiatan
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col flex-1 px-4 py-2 overflow-auto h-96">
                        <!-- Name -->
                        <div class="mt-4">
                            <x-label for="tanggal" :value="__('Tanggal')" />

                            <x-input wire:model.defer="tanggal" id="tanggal" class="block w-full mt-1" type="date"
                                name="tanggal" autofocus />
                            <span class="text-sm text-danger">
                                @error('tanggal')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="detail" :value="__('Detail')" />

                            <textarea wire:model.defer="detail" id="detail"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                                type="text" name="detail"></textarea>
                            <span class="text-sm text-danger">
                                @error('detail')
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
                            <button type="button" @click="modal = false" class="btn-secondary">
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
        <div class="w-full overflow-x-auto">
            <table class="min-w-full mt-2 divide-y divide-gray-200 table-auto">
                <thead class="bg-gray-50">
                    <tr class="">
                        <th scope="col"
                            class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                            #
                        </th>
                        <th scope="col"
                            class="w-2/12 px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                            Tanggal
                        </th>
                        <th scope="col"
                            class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                            Detail
                        </th>

                        <th scope="col"
                            class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                            <span class="sr-only">Edit</span>
                            <span class="sr-only">Hapus</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($kegiatans as $key => $kegiatan)
                        <tr>
                            <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                {{ $key + 1 }}
                            </td>
                            <td class="px-2 py-4 md:px-6">
                                {{ $kegiatan->tanggal }}
                            </td>
                            <td class="px-2 md:px-6">
                                {{ $kegiatan->detail }}
                            </td>
                            <td class="px-2 md:px-6">
                                <div class="flex flex-row items-center space-x-4">
                                    <button @click="modalEdit = true" wire:click="getUser({{ $kegiatan->id }})"
                                        type="button" class="text-sm btn-secondary">edit</button>
                                    <button wire:click="delete({{ $kegiatan->id }})" type="button"
                                        class="text-sm btn-danger">hapus</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <!-- More people... -->
                </tbody>
            </table>
        </div>
        {{ $kegiatans->links() }}

    </div>
    {{-- Modal Edit --}}
    <form wire:submit.prevent='update' novalidate>
        @csrf
        <div class="fixed inset-0 z-50 flex justify-center w-full py-8 bg-black bg-opacity-40" x-show="modalEdit">

            <!-- A basic modal dialog with title, body and one button to close -->

            <div @click.away="modalEdit = false" x-show="modalEdit" x-transition.duration.500
                class="flex flex-col w-11/12 h-auto p-4 mx-2 text-left bg-white divide-y-2 divide-gray-300 rounded shadow-xl md:10/12 lg:w-6/12">


                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        Form Kegiatan
                    </h3>

                    <div class="mt-2">
                        <p class="text-sm leading-5 text-secondary">
                            silahkan ubah data kegiatan
                        </p>
                    </div>
                </div>

                <div class="flex flex-col flex-1 px-4 py-2 overflow-auto h-96">
                    <input type="hidden" wire:model="kegiatan_id">

                    <!-- Name -->
                    <div class="mt-4">
                        <x-label for="kegiatan_tanggal" :value="__('Tanggal')" />

                        <x-input wire:model.defer="kegiatan_tanggal" id="kegiatan_tanggal" class="block w-full mt-1"
                            type="date" name="kegiatan_tanggal" autofocus />
                        <span class="text-sm text-danger">
                            @error('kegiatan_tanggal')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="kegiatan_detail" :value="__('Detail')" />

                        <textarea wire:model.defer="kegiatan_detail" id="kegiatan_detail"
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            type="text" name="kegiatan_detail"></textarea>
                        <span class="text-sm text-danger">
                            @error('kegiatan_detail')
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
                        <button type="button" @click="modalEdit = false" class="btn-secondary">
                            Close
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </form>

</div>
