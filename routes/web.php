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

Route::get('/', 'MovieController@index')->name('movie.index');

Route::get('movie', 'MovieController@index')->name('movie.index');
Route::get('movie/create', 'MovieController@create')->name('movie.create');
Route::post('movie/store', 'MovieController@store')->name('movie.store');
Route::get('movie/{id}/show', 'MovieController@show')->name('movie.show');
Route::get('movie/{id}/edit', 'MovieController@edit')->name('movie.edit');
Route::put('movie/{id}', 'MovieController@update')->name('movie.update');
Route::delete('movie/{id}/borrar', 'MovieController@destroy')->name('movie.destroy');
//Route::get('movie/search/{searchString}', 'MovieController@search')->name('movie.search');

Route::get('genre/{id}/show', 'GenreController@show')->name('genre.show');
Route::resource('genre', 'GenreController');

Route::get('user', 'UserController@index')->name('user.index');
Route::get('user/create', 'UserController@create')->name('user.create');
Route::post('user/store', 'UserController@store')->name('user.store');
Route::get('user/{id}', 'UserController@show')->name('user.show');
Route::get('user/{id}/edit', 'UserController@edit')->name('user.edit');
Route::put('user/{id}', 'UserController@update')->name('user.update');
Route::delete('user/{id}/borrar', 'UserController@destroy')->name('user.destroy');

Route::get('people', 'PeopleController@index')->name('people.index');
Route::get('people/create', 'PeopleController@create')->name('people.create');
Route::post('people/store', 'PeopleController@store')->name('people.store');
Route::get('people/show', 'PeopleController@show')->name('people.show');
Route::get('people/{id}/edit', 'PeopleController@edit')->name('people.edit');
Route::put('people/{id}', 'PeopleController@update')->name('people.update');
Route::delete('people/{id}/borrar', 'PeopleController@destroy')->name('people.destroy');

Route::resource('peopleActMovies', 'PeopleActMoviesController');
Route::resource('peopleDirectMovies', 'PeopleDirectMoviesController');

//Route::resource('people','PeopleController');
/*
Route::get('/', function () {
    return view('movie.index');
});

*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
