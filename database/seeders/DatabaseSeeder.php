<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'membership_id' => 1,
            'name' => 'Brayan Esten',
            'email' => 'bryanesten1221@gmail.com',
            'password' => bcrypt('123'),
            'credit' => 150000,
            'level' => 14
        ]);

        // User::factory(3)->create();

    }
}
