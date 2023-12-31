<?php

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

Route::get('/', function () {
    return view('welcome');
});

// the route we have created to show blog posts
Route::get('/blog',[\App\Http\Controllers\BlogPostController::class, 'index']);
Route::get('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show']);