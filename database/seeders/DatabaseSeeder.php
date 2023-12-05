<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Anak;
use App\Models\BukuTamu;
use App\Models\Imunisasi;
use App\Models\JenisImunisasi;
use App\Models\Ortu;
use App\Models\VitaminA;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fitra Fajar',
            'username' => 'fitra',
            'level' => 'admin',
            'email' => 'fitra@gmail.com',
            'password' => bcrypt('12345')
        ]);
        
        User::factory(3)->create();


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

        Post::factory(10)->create();
        Anak::factory(10)->create();
        Ortu::factory(10)->create();
        JenisImunisasi::factory(3)->create();
        Imunisasi::factory(10)->create();
        BukuTamu::factory(5)->create();
        VitaminA::factory(5)->create();
        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'lorem ipsum pertama',
        //     'body' => 'lorem ipsum dolor sit amet',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'lorem ipsum kedua',
        //     'body' => 'lorem ipsum dolor sit amet',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'lorem ipsum ketiga',
        //     'body' => 'lorem ipsum dolor sit amet',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

    }
}
