<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// To check if the route work
// Route::get('/test', function(Request $request){
//     return 'Authenticated';
// });

Route::middleware('auth:api')->prefix('v1')->group(function() {
    Route::get('/user', function(Request $request) {
        return $request->user();
    });

    //author/{author}
    //For one specific author
    // Route::get('/authors/{author}', [AuthorsController::class, 'show']);

    // Route::get('/authors', [AuthorsController::class, 'index']);

    Route::apiResource('/authors', AuthorsController::class);
    Route::apiResource('/books', BooksController::class);
});

// Books belongs to an author
// User that created books



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
