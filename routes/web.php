<?php

use App\Http\Controllers\Comments;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\MoviesController;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.movies');
});

Route::get('/movies', [MoviesController::class, 'index']);
Route::get('/movies/{id}', [MoviesController::class, 'show']);
Route::get('/create', [MoviesController::class, 'create']);
Route::post('/create', [MoviesController::class, 'store']);
Route::get('/movies', [Comments::class, 'store']);
Route::get('/genre', [GenresController::class, 'show']);
