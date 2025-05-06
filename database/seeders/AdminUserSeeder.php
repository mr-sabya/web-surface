<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'], // Unique key
            [
                'name' => 'Admin User',
                'password' => Hash::make('admin12345'), // Use a secure password in real projects
                'is_admin' => true,
            ]
        );
    }
}
