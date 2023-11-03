<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Models\Movie;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|

| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/movies', [MovieController::class, 'index'] );
Route::get('/movies/{id}', [MovieController::class, 'showOneMovie']);
Route::get('/crear-pelicula', [MovieController::class, 'crear'])->name('post.create');
Route::post( '/crear-pelicula', [MovieController::class, 'store'])->name('post.store');
Route::get('/home/movies', [MovieController::class, 'showAllMovies'])->name('get.showAllMovies');
Route::put( '/movies/{id}', [MovieController::class, 'update']);
Route::delete( '/movies/{id}', [MovieController::class, 'destroy']);
Route::get('/movies/search/{title}', [MovieController::class, 'search']);
Route::resource('home', MovieController::class, ['only' => ['index', 'showAllMovies', 'store', 'update', 'destroy']]);