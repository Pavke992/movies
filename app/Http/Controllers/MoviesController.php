<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('pages.movies', compact('movies'));
    }


    public function create(){
        return view('pages.create', compact('movies'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->validate([
        'title' => 'required|string',
        'genre' => 'required|string',
        'director' => 'required|string',
        'year' => 'required|integer',
        'storyline' => 'required|longText'

      ]);

    $movie = Movie::create([
        'title' => $request->title,
        'genre' => $request->genre,
        'director' => $request->director,
        'year' => $request->year,
        'storyline' => $request->storyline
    ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movies = Movie::find($id);
        return view('pages.movies' ,compact('movies'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
