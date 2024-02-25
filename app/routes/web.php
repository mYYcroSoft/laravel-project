<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testValue;
use App\Http\Controllers\PostController;

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
    return view('master');
});

Route::get('/welcome', function() {
    return view('welcome');
});
// Route::get('/test', [testValue::class, 'test']);

Route::resource('blog', PostController::class);
Route::get('/blog/{id}/show', [PostController::class, 'show']);

