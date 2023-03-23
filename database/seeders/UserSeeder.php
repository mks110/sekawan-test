<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'level' => 'admin',
            'password' => bcrypt('admin'),
        ],[
            'name' => 'user',
            'username' => 'user',
            'level' => 'user',
            'password' => bcrypt('user'),
        ]);
    }
}
