<?php

namespace App\Http\Controllers;
use Str;
use App\Movie;
use App\Category;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('movies.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required|max:100',
            'series' => 'required|max:100',
            'sale_date' => 'required|max:100',
            'price' => 'required|max:100',
            'type' => 'required|max:100',
            'category_id' => 'nullable|exists:categories,id'
        ]);

        $movie = new Movie();

        /* $movie->title = $request->input('title');
        $movie->description = $request->input('description');
        $movie->series = $request->input('series');
        $movie->sale_date = $request->input('sale_date');
        $movie->price = $request->input('price');
        $movie->type = $request->input('type'); */

        $data = $request->all();
        $movie->fill($data);
        $movie->slug = Str::slug($data['title']);
        
        $movie->save();

        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required|max:100',
            'series' => 'required|max:100',
            'sale_date' => 'required|max:100',
            'price' => 'required|max:100',
            'type' => 'required|max:100',
            'slug' => 'required|max:100',
        ]);

        $data = $request->all();
        if($data['title'] != $movie->title){
            $data['slug'] = Str::slug($data['title']);
        }
        $movie->update($data);

        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delate();
        return redirect()->route('movies.index');
    }
}

