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
        $username = strtok('admin@example.com', '@');
        User::insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'username' => $username.rand(1,100),
            'password' => Hash::make('hehehehe')
        ]);
    }
}
