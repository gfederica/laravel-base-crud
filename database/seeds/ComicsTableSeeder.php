<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach ($comics as $comic) {

            $newComic = new Comic();

            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];

            // nuova variabile slug, unisco il titolo e il nome della serie
            $slug = $comic['title'] . $comic['series'];
            // uso il metodo slug e importo la nuova proprietà
            $newComic->slug = Str::slug($slug, '-');

            // lancio il save e popolo la tabella
            $newComic->save();
            dd($newComic);
        }
    }
}
