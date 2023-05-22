<div class="py-12 md:px-8">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Program Kerja') }}
        </h2>
    </x-slot>



    <div x-cloak class="px-4 py-2 bg-white rounded-lg shadow-lg" x-data="{ modal: false, modalEdit: false }"
        x-on:close-modal.window="modal = false" x-on:close-modal-edit.window="modalEdit = false">

        <livewire:proker.create-proker></livewire:proker.create-proker>
        <livewire:proker.edit-proker></livewire:proker.edit-proker>

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
                                    <button @click="modalEdit = true"
                                        wire:click.prevent="$emit('getProker', {{ $proker->id }})" type="button"
                                        class="text-sm btn-secondary">edit</button>
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