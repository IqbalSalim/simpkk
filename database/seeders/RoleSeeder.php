<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            'admin',
            'anggota',
        ];
        foreach ($array as $row) {
            Role::create(['name' => $row]);
        }

        $array2 = [
            'olah user',
            'olah profil',
            'olah kegiatan',
            'olah dasawisma',
            'olah warta',
            'lihat laporan'
        ];

        foreach ($array2 as $row) {
            Permission::create(['name' => $row]);
        }

        // Tambah Permission di Role Admin
        $role = Role::where('name', 'admin')->first();
        $role->givePermissionTo([
            'olah user',
            'olah profil',
            'olah kegiatan',
            'olah dasawisma',
            'olah warta',
            'lihat laporan'
        ]);

        // Tambah Permission di Role Anggota
        $role = Role::where('name', 'anggota')->first();
        $role->givePermissionTo([
            'olah kegiatan',
            'olah dasawisma',
            'olah warta',
            'lihat laporan'
        ]);
    }
}
