<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = User::create([
            'name' => 'Super Admin',
            'email' =>'superadmin@mail.com',
            'photo' => 'https://ui-avatars.com/api/?name=Manager&background=random',
            'jenis_usaha' => 'Pegawai BPJS',
            'password' => bcrypt('password')
        ]);
        $superadmin->assignRole('superadmin');

        $admin = User::create([
            'name' => 'Admin',
            'email' =>'admin@mail.com',
            'photo' => 'https://ui-avatars.com/api/?name=Staff&background=random',
            'jenis_usaha' => 'Pegawai BPJS',
            'password' => bcrypt('password')
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'UMKM',
            'email' =>'umkm@mail.com',
            'password' => bcrypt('password'),
            'jenis_usaha' => 'Penjual Roti'
        ]);
        $user->assignRole('umkm');
    }
}
