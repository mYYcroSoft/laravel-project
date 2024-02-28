<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin',
            'email_verified_at' => now(),
            'password' => 'admin123456',
        ]);
        $user->assignRole('guest');
    }
}