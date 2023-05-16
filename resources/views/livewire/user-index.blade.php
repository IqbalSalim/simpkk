<div x-cloak class="px-4 py-2 bg-white rounded-lg shadow-lg" x-data="{ modal: false, modalEdit: false }"
    x-on:close-modal.window="modal = false" x-on:close-modal-edit.window="modalEdit = false">
    <div class="flex flex-row items-center justify-between py-2 font-semibold text-gray-700 border-b-2 border-gray-300">
        <div>
            <h2>Daftar User</h2>
        </div>
        <div>
            <button class="btn-primary" @click="modal = true">Tambah User</button>

        </div>
    </div>

    <livewire:user.create-user></livewire:user.create-user>
    <livewire:user.edit-user></livewire:user.edit-user>
    <div class="py-4">

        {{-- Form Tambah User --}}

        <!-- Dialog (full screen) -->




        @if (session()->has('message'))
        <div class="block px-4 py-2 text-white bg-opacity-50 bg-success rounded-xl">
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
                            class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                            Nama
                        </th>
                        <th scope="col"
                            class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                            No Telepon
                        </th>
                        <th scope="col"
                            class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                            Alamat
                        </th>
                        <th scope="col"
                            class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase md:px-6">
                            Role
                        </th>
                        <th scope="col"
                            class="px-2 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                            <span>Edit</span>
                            <span>Hapus</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($users as $key => $user)
                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500 md:px-6 whitespace-nowrap">
                            {{ $key + 1 }}
                        </td>
                        <td class="px-2 py-4 md:px-6">
                            <div class="flex items-center gap-x-2">
                                <div class="w-14 h-14 ">
                                    <img class="object-cover rounded-lg"
                                        src="{{ $user->anggota->foto  !== '' ? asset('storage/'.$user->anggota->foto) : asset('images/default-user.png') }}"
                                        alt="Foto User">
                                </div>
                                <div class="flex flex-col gap-y-0">
                                    <span class="font-bold text-blue-500 uppercase">{{
                                        $user->anggota()->first()->nama }}</span>
                                    <span class="font-bold">{{ $user->email }}</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->anggota->no_telpon }}
                        </td>
                        <td class="px-6 py-4">
                            {{$user->anggota->alamat }}
                        </td>
                        <td class="px-2 md:px-6">
                            @if (!empty($user->roles[0]->name))
                            <span class="px-2 text-sm text-white bg-opacity-50 rounded-full bg-primary">{{
                                $user->roles[0]->name }}
                            </span>
                            @endif
                        </td>
                        <td class="px-2 md:px-6">
                            <div class="flex flex-row items-center space-x-4">
                                <button @click="modalEdit = true" wire:click.prevent="$emit('getUser', {{ $user->id }})"
                                    type="button" class="text-sm btn-secondary">edit</button>
                                <button wire:click="delete({{ $user->id }})" type="button"
                                    class="text-sm btn-danger">hapus</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    <!-- More people... -->
                </tbody>
            </table>
        </div>
        {{ $users->links() }}

    </div>
</div>