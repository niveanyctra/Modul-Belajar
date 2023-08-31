<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $username = strtok('admin123@example.com', '@');
        User::insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'username' => $username,
            'password' => Hash::make('hehehehe')
        ]);
    }
}
