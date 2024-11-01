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
            'password' => Hash::make('password'),
        ]);

        User::insert([
            'name' => 'Ahmad Fadillah',
            'nik' => '0738abm',
            'departemen' => 'Produksi',
            'password' => Hash::make('password'),
        ]);
    }
}
