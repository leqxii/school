<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'leqxi',
            'email' => 'kevinpierik@icloud.com',
            'password' => Hash::make('fhd68Twe'),
            'role' => 'admin', 
        ]);
    }}
