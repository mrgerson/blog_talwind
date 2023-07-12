<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Gerson Calvo Baena',
            'email' => 'gedacaba@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        User::factory(99)->create();
    }
}
