<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'           => 'Zizi Andrea',
                'email'          => 'zizi@gmail.com',
                'password'       => Hash::make('Admin12345.'),
                'remember_token' => null,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'name'           => 'Akmal Indra',
                'email'          => 'akmal@gmail.com',
                'password'       => Hash::make('Wadir12345.'),
                'remember_token' => null,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'name'           => 'Kasmawi',
                'email'          => 'kasmawi@gmail.com',
                'password'       => Hash::make('Kajur12345.'),
                'remember_token' => null,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'name'           => 'Supria',
                'email'          => 'supria@gmail.com',
                'password'       => Hash::make('Kaprodi12345.'),
                'remember_token' => null,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'name'           => 'Lipantri',
                'email'          => 'lipantri@gmail.com',
                'password'       => Hash::make('Dosen12345.'),
                'remember_token' => null,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'name'           => 'Riski',
                'email'          => 'riski@gmail.com',
                'password'       => Hash::make('Dosen12345.'),
                'remember_token' => null,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'name'           => 'Mansur',
                'email'          => 'mansur@gmail.com',
                'password'       => Hash::make('Dosen12345.'),
                'remember_token' => null,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'name'           => 'Muhammad Nasir',
                'email'          => 'nasir@gmail.com',
                'password'       => Hash::make('Dosen12345.'),
                'remember_token' => null,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'name'           => 'Muhammad Assyafikri',
                'email'          => 'safik@gmail.com',
                'password'       => Hash::make('Mahasiswa12345.'),
                'remember_token' => null,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'name'           => 'Fitrah Desmalini',
                'email'          => 'fitrah@gmail.com',
                'password'       => Hash::make('Mahasiswa12345.'),
                'remember_token' => null,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
        ];

        User::insert($user);
    }
}
