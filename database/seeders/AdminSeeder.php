<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
            'password' => Hash::make('hehehehe'),
            'role' => 'super admin',
            'created_at' => Carbon::now()->format('Y-m-d'),
            'updated_at' => Carbon::now()->format('Y-m-d'),
        ]);
    }
}
