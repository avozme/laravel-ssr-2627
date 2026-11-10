<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Alfredo Moreno',
                'email' => 'alfredomoreno@iescelia.org',
                'email_verified_at' => now(),
                'password' => Hash::make('1234'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'María García',
                'email' => 'maria@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carlos López',
                'email' => 'carlos@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ana Martínez',
                'email' => 'ana@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pedro Sánchez',
                'email' => 'pedro@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
