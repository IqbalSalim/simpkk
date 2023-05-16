<?php

namespace Database\Seeders;

use App\Models\Anggota;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nama' => 'Admin SIMPKK',
                'jenis_kelamin' => 'Laki-laki',
                'no_telpon' => '082345345332',
                'alamat' => 'Jln Jeruk',
                'email' => 'admin@gmail.com',
                'foto' => '',
                'password' => 'password',
                'role' => 'admin',
            ],
            [
                'nama' => 'John Doe',
                'jenis_kelamin' => 'Laki-laki',
                'no_telpon' => '082241131552',
                'alamat' => 'Jln Analisa',
                'email' => 'john@gmail.com',
                'foto' => '',
                'password' => 'password',
                'role' => 'anggota',
            ]
        ];

        foreach ($users as $row) {
            $user = User::create([
                'email' => $row['email'],
                'password' => Hash::make($row['password']),
            ]);

            Anggota::create([
                'user_id' => $user->id,
                'nama' => $row['nama'],
                'jenis_kelamin' => $row['jenis_kelamin'],
                'no_telpon' => $row['no_telpon'],
                'alamat' => $row['alamat'],
                'foto' => $row['foto'],
            ]);

            $role = Role::where('name', $row['role'])->first();
            $user = User::where('email', $row['email'])->first();
            $user->assignRole($role);
        }
    }
}
