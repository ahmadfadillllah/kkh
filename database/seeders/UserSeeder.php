<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::insert([
            'name' => 'Administrator',
            'nik' => 'admin',
            'departemen' => 'Admin',
            'password' => Hash::make('1234qwer'),
        ]);

        User::insert([
            'name' => 'User Testing',
            'nik' => '12345',
            'departemen' => 'Produksi',
            'password' => Hash::make('1234qwer'),
        ]);
    }
}
