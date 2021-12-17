<?php

use App\Http\Controllers\ContactPageController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'App\Http\Controllers\PagesController@index');

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/portfolio', function () {
    return view('pages.portfolio');
});

Route::get('/blog', function () {
    return view('posts.index');
});

Route::get('/contact', function () {
    return view('pages.contact');
 });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', 'App\Http\Controllers\PostsController');

Auth::routes();

