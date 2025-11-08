<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Nicolas Raymond',
            'email' => 'nicolasraymond@iprij.fr',
            'password' => bcrypt('Rhinoceros#2'),
            'email_verified_at' => now(),
        ]);
    }
}
