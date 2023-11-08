<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function  index(){
        $movies = Movie::all();
        // dd( $movies ); 
        return response()->json($movies);
    
      // return view('AllMovies', ['movies' => Movie::all()]);
    }
    public function showAllMovies(){
        $movies = Movie::all();
        return view('allMovies', ['movies' => $movies]);
    }
    public function  showOneMovie($id){
        $movie = Movie::find($id);
        if(!$movie){
            return response()->json(['message' => 'Movie not found'], 404);
        }
        return response()->json($movie);
    } 
    public function crear(){
        return view('crearPelicula');
    }
    public function store(){
        if(!$_POST){
            header( 'Location: https://localhost:8000' );
        }
        $datos = request()->all();
        $movie = new Movie();
        $movie->title = $datos['title'];
        $movie->year = $datos['year'];
        $movie->synopsis = $datos['synopsis'];
        $movie->cover = $datos['cover'];
        $movie->save();
        // return redirect()->back();

    }
    public function edit($id){
        $movie = Movie::find($id);
        return view('editMovie', ['movie' => $movie]);
    }
    public function update(Request $request,$id) {
        $movie = Movie::find($id);
        $data = request()->all();
        $movie->title = $data['title'];
        $movie->year = $data['year'];
        $movie->synopsis = $data['synopsis'];
        $movie->cover = $data['cover'];
      $movie->update();
        return redirect()->back();
    }
    public function destroy($id){
        $movie = Movie::find($id);
        $movie->delete();
        return response()->json(['message' => 'Movie deleted'], 200);
    }
   
}
