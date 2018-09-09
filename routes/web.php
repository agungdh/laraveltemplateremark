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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::get('/table', function () {
    return view('table');
});

Route::get('/form', function () {
    return view('form');
});

// Route::get('/logins', function () {
//     return view('logins');
// });

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
	'/user' => 'UserController'
]);
