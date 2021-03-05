<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      $comics = config("comics");

      foreach ($comics as $comic) {
        $newComic = new Comic();

        $newComic->slug = Str::slug($comic["title"]);
        $newComic->fill($comic)->save();

      }
    }
}
