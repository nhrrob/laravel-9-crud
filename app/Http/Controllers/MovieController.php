<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use Exception;

class MovieController extends Controller
{
    public function index()
    {
        $data['movies'] = Movie::latest()->paginate(10);
        return view('movie.index', $data);
    }

    public function create()
    {
        return view('movie.create');
    }

    public function store(MovieRequest $request)
    {
        try{
            $movie = Movie::create($request->all());

            $notification = array(
                'message' => 'Movie saved successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('movies.index')->with($notification);

        } catch (Exception $e) {
            $notification = array(
                'message' => $e->getMessage(),
                'alert-type' => 'error'
            );

            return redirect()->route('movies.index')->with($notification);
        }
    }

    public function show(Movie $movie)
    {
        //
    }

    public function edit(Movie $movie)
    {
        $data['movie'] = $movie;
        return view('movie.edit', $data);
    }

    public function update(MovieRequest $request, Movie $movie)
    {
        try {
            $movie = $movie->update($request->all());

            $notification = array(
                'message' => 'Movie saved successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('movies.index')->with($notification);
        } catch (Exception $e) {
            $notification = array(
                'message' => $e->getMessage(),
                'alert-type' => 'error'
            );
            return redirect()->route('movies.index')->with($notification);
        }
    }

    public function destroy(Movie $movie)
    {
        try{
            Movie::find($movie->id)->delete();

            $notification = array(
                'message' => 'Movie deleted successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('movies.index')->with($notification);
        } catch (Exception $e) {
            $notification = array(
                'message' => $e->getMessage(),
                'alert-type' => 'error'
            );
            return redirect()->route('movies.index')->with($notification);
        }
    }
}