<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    public function run()
    {
        Genre::create([
          'name' => 'action'
        ]);
        Genre::create([
          'name' => 'comedy'
        ]);
        Genre::create([
          'name' => 'romance'
        ]);
        Genre::create([
          'name' => 'thriller'
        ]);
        Genre::create([
          'name' => 'horror'
        ]);
        Genre::create([
          'name' => 'drama'
        ]);
        Genre::create([
          'name' => 'adventure'
        ]);
        Genre::create([
          'name' => 'sci-fi'
        ]);
        Genre::create([
          'name' => 'western'
        ]);
        Genre::create([
          'name' => 'animation'
        ]);
        Genre::create([
          'name' => 'musical'
        ]);
    }
}
