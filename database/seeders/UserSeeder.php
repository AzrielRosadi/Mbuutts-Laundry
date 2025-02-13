<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin123@gmail.com',
                'password' => Hash::make('admin12345'),
                'role' => 'admin',
            ],
            [
                'name' => 'Owner',
                'email' => 'owner123@gmail.com',
                'password' => Hash::make('owner12345'),
                'role' => 'owner',
            ]
        ];

        foreach ($users as $user) {
            User::firstOrCreate(['email' => $user['email']], $user);
        }
    }
}
