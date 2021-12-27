<div class="py-12 md:px-8">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dasawisma') }}
        </h2>
    </x-slot>
    @if (session()->has('message'))
        <div class="block px-4 py-2 my-2 text-white bg-opacity-50 bg-success rounded-xl">
            {{ session('message') }}
        </div>
    @endif
    <div class="px-4 py-2 mt-4 bg-white divide-y-2 divide-gray-200 rounded-lg shadow-lg">
        <div class="flex flex-row py-2 space-x-4">
            <a href="{{ route('dasawisma.create') }}" class="text-sm btn-primary">Tambah Dasawisma</a>
        </div>
        <div>
            <div class="flex flex-row items-center justify-between">
                <div class="py-2">
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
                                class="w-1/12 px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                #
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Nama Anggota Dasawisma
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                                Dusun
                            </th>

                            <th scope="col"
                                class="w-3/12 px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                <span class="sr-only">Detail</span>
                                <span class="sr-only">Edit</span>
                                <span class="sr-only">Hapus</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @if ($dasawisma->count() != 0)
                            @foreach ($dasawisma as $key => $row)
                                <tr>
                                    <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                                        {{ $key + 1 }}
                                    </td>
                                    <td class="px-2 py-4 md:px-6">
                                        {{ $row->filterNama()->Nama_Lengkap }}
                                    </td>
                                    <td class="px-2 md:px-6">
                                        {{ $row->filterNama()->dusun }}
                                    </td>
                                    <td class="px-2 md:px-6">
                                        <div class="flex flex-row items-center space-x-4">
                                            <a href="{{ route('dasawisma.detail', $row->id) }}"
                                                class="text-sm btn-warning">Detail</a>
                                            <a href="{{ route('dasawisma.edit', $row->id) }}"
                                                class="text-sm btn-secondary">Edit</a>
                                            <button wire:click="delete({{ $row->id }})" type="button"
                                                class="text-sm btn-danger">hapus</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" class="font-medium text-center text-danger">Data tidak ditemukan..</td>
                            </tr>
                        @endif


                        <!-- More people... -->
                    </tbody>
                </table>


            </div>
            {{ $dasawisma->links() }}
        </div>
    </div>
</div>
