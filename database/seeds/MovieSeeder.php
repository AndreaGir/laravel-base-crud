<?php

use Illuminate\Database\Seeder;

use App\Movie;

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

            $movie->title = $m['title'];
            $movie->description = $m['description'];
            $movie->thumb = $m['thumb'];
            $movie->price = $m['price'];
            $movie->series = $m['series'];
            $movie->sale_date = $m['sale_date'];
            $movie->type = $m['type'];


            $movie->save();
        }
    }
}
