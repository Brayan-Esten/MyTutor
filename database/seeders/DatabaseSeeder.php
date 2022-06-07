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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Brayan',
            'email' => 'brayan@mail,com',
            'password' => bcrypt(12345)
        ]);

        User::create([
            'name' => 'Bayu',
            'email' => 'bayu@mail,com',
            'password' => bcrypt(54321)
        ]);

        Category::create([
            'name' => 'web programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'object oriented',
            'slug' => 'object-oriented'
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'first post',
            'slug' => 'first-post',
            'preview' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, pariatur? Dolor cumque natus commodi aspernatur?',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias illum animi corporis, earum culpa accusamus ut. Saepe tempora dolorem ipsum aperiam. Deleniti unde inventore sapiente. Aut sit autem quo quasi.'
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => 2,
            'title' => 'second post',
            'slug' => 'second-post',
            'preview' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, pariatur? Dolor cumque natus commodi aspernatur?',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias illum animi corporis, earum culpa accusamus ut. Saepe tempora dolorem ipsum aperiam. Deleniti unde inventore sapiente. Aut sit autem quo quasi.'
        ]);


        Post::create([
            'user_id' => 2,
            'category_id' => 1,
            'title' => 'third post',
            'slug' => 'third-post',
            'preview' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, pariatur? Dolor cumque natus commodi aspernatur?',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias illum animi corporis, earum culpa accusamus ut. Saepe tempora dolorem ipsum aperiam. Deleniti unde inventore sapiente. Aut sit autem quo quasi.'
        ]);

        Post::create([
            'user_id' => 2,
            'category_id' => 2,
            'title' => 'fourth post',
            'slug' => 'fourth-post',
            'preview' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, pariatur? Dolor cumque natus commodi aspernatur?',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias illum animi corporis, earum culpa accusamus ut. Saepe tempora dolorem ipsum aperiam. Deleniti unde inventore sapiente. Aut sit autem quo quasi.'
        ]);

    }
}
