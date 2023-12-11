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
        $this->call([
            UserSeeder::class,
        ]);
    }
}
