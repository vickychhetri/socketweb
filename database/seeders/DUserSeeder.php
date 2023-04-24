<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class DUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
        'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('secret'),
        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'janedoe2@example.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
