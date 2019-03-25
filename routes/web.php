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

/*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PostController@home');
Route::resource('/posts', 'PostController');
*/
// Below code makes it so you can use Laravel route proxy as a Vue route:
Route::get('/{any}', function () {
  return view('post');
})->where('any', '.*');
