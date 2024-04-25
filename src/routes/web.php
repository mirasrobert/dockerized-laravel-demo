<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', WelcomeController::class);
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts', WelcomeController::class);

Route::get('/helloworld', function () {
    return '<h1>Hello World!!!</h1>';
});
