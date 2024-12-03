<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        User::create([
            'username' => 'Dev Skills',
            'password' => bcrypt('password'),
        ]);
    }
}
