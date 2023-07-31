<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Comments as ControllersComments;
use Illuminate\Http\Request;

class Comments extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'movie_id' => 'required|string',
            'content' => 'required|string'
    
          ]);
    
        $comment = Comments::create([
            'movie_id' => $request->title,
            'content' => $request->content
        ]);

        // return redirect()
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
