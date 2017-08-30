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
// Login
Route::get('/', ['uses' => 'ReglogController@logview'])->name('log');
Route::post('/loginn', ['uses' => 'ReglogController@logstore'])->name('loginCheck');

// All users
Route::get('/users', ['uses' => 'UsersController@index'])->name('users');
Route::get('/user/{id}', ['uses' => 'UsersController@destroy'])->name('del');

// Register
Route::get('/register', ['uses' => 'ReglogController@regview'])->name('reg');
Route::post('/regpost', ['uses' => 'ReglogController@regstore'])->name('regstore');

// Profile
Route::get('/profile/{id}', ['uses' => 'ProfileController@index'])->name('prof');

// Create User
Route::get('/create', ['uses' => 'UsersController@createuser'])->name('createUser');
Route::post('/create', ['uses' => 'UsersController@createUs'])->name('createUs');

// Update User
Route::get('/update/{id}', ['uses' => 'UsersController@updateuser'])->name('updateUser');
Route::post('/update/{id}', ['uses' => 'UsersController@updateUs'])->name('updateUs');

// Logout
Route::get('/logout', function(){
	Auth::logout();

	return Redirect::to('');
})->name('logout')->middleware("auth");

