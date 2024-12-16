<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 0,
            'fullName' => 'admin',
            'userName' => 'admin',
            'email' => 'seeuadmin@gmail.com',
            'password' => Hash::make('seeu123'),
            'role' => 'admin',
            'original_filename' => null,
            'encrypted_filename' => null,
        ]);

    }
}
