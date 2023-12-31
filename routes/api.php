<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\entities\AlbumController;
use App\Http\Controllers\entities\ArtistController;
use App\Http\Controllers\entities\GenresController;
use App\Http\Controllers\entities\SongController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// auth routes
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'store']);

// required auth routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    // Artist routes
    Route::apiResource('/artist', ArtistController::class);

    // Genre routes
    Route::apiResource('/genre', GenresController::class);

    // Album routes
    Route::apiResource('/album', AlbumController::class);

    // Song routes
    Route::apiResource('/song', SongController::class);
});