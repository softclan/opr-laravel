<?php

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

use Illuminate\Http\Request;

//dd($_SERVER['REQUEST_METHOD']);


Route::get('/', 'PostsController@index')->name('home');

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/{slug}', 'PostsController@article');
Auth::routes();


