<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'calvineuy@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 0,
            'created_by' => 'system',
            'modified_by' => 'system'
        ]);
        User::create([
            'name' => 'applicant',
            'email' => 'applicant@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 1,
            'created_by' => 'system',
            'modified_by' => 'system'
        ]);
    }
}
