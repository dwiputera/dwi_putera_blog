<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
        // kalo udah use, bisa kaya dibawah
        User::factory(9)->create();

        User::create([
            'name' => 'Dwi Putera',
            'username' => 'dwi_putera',
            'email' => 'dwiputera@gmail.com',
            'password' => bcrypt('password')
        ]);
        // User::create([
        //     'name' => 'Eko Radityo',
        //     'email' => 'ekoradityo@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'lorem ipsum',
        //     'body' => 'lorem ipsum dolor sit amet',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'lorem ipsum2',
        //     'body' => 'lorem ipsum dolor sit amet2',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'lorem ipsum3',
        //     'body' => 'lorem ipsum dolor sit amet3',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'lorem ipsum4',
        //     'body' => 'lorem ipsum dolor sit amet4',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        

    }
}
