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
            'name' => 'Brayan Esten',
            'username' => 'itsbrayan',
            'email' => 'bryanesten1221@gmail.com',
            'password' => bcrypt('123')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Object Oriented',
            'slug' => 'object-oriented'
        ]);

        Category::create([
            'name' => 'Multimedia Systems',
            'slug' => 'multimedia-systems'
        ]);

        Post::factory(20)->create();

    }
}
