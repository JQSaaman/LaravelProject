<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route::get('/posts', [\App\Http\Controllers\PostsController::class, 'index']);
//Route::post('/posts', [\App\Http\Controllers\PostsController::class, 'store']);
//Route::get('/posts/create', [\App\Http\Controllers\PostsController::class, 'create']);
//Route::get('/posts/{post}/edit', [\App\Http\Controllers\PostsController::class, 'edit']);
//Route::put('/posts/{post}', [\App\Http\Controllers\PostsController::class, 'update']);
//Route::delete('/posts/{post}', [\App\Http\Controllers\PostsController::class, 'destroy']);

Route::resource('/posts', PostsController::class);

require __DIR__.'/auth.php';
