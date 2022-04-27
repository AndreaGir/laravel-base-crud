<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie = config('movie');

        foreach($movie as $m){
            $movie = new Movie();

            $movie->title = $m['titolo'];
            $movie->description = $m['descrizione'];
            $movie->image = $m['thumb'];
            $movie->price = $m['prezzo'];
            $movie->series = $m['serie'];
            $movie->sale_date = $m['data'];
            $movie->type = $m['tipo'];


            $movie->save();
        }
    }
}
