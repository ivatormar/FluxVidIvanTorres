<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Http\Requests\MovieUpdateRequest;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Director;


class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $movies = Movie::paginate(6);
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $directors = Director::All();
        return view('movies.create', compact('directors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovieRequest $request)
    {
        $movie = new Movie();
        $movie->title = $request->get('title');
        $movie->slug = Str::slug($movie->title);
        $movie->year = $request->get('year');
        $movie->plot = $request->get('plot');
        $movie->rating = $request->get('rating');
        $movie->visibility = $request->has('visibility') ? 1 : 0;
        $movie->director()->associate(Director::findOrfail($request->get('director')));
        $movie->save();

        return view('movies.stored', compact('movie'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Movie $movie)
    {
        if ($movie->visibility == 0) {
            abort(404);
        }
        $message = $request->get('message');
        return view('movies.show', compact('movie', 'message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        $directors = Director::All();
        return view('movies.edit', compact('movie', 'directors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MovieUpdateRequest $request, Movie $movie)
    {

        $movie->title = $request->get('title');
        $movie->slug = Str::slug($movie->title);
        $movie->year = $request->get('year');
        $movie->plot = $request->get('plot');
        $movie->rating = $request->get('rating');
        $movie->visibility = $request->has('visibility') ? 1 : 0;
        $movie->director()->associate(Director::findOrfail($request->get('director')));
        $movie->save();

        return redirect()->route('movies.show', ['movie' => $movie, 'message' => 'Pelicula actualizada']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        return redirect()->route('movies.index');
    }
}
