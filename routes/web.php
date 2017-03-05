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
use App\Post;

Route::get('/', function() {
	return view('welcome');
});

// Basic static page routes

Route::get('/about', function() {
	return view('static.about');
})

Route::get('/contact', function() {
	return view('static.contact');
})

Route::get('/posts', 'PostsController@index')->name('home');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');



Route::post('/posts/{post}/comments', 'CommentsController@store');

// Registration
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

// Authentication
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout','SessionsController@destroy');
	