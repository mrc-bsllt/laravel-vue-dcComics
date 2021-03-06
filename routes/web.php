<?php

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

// Route::get('/', function () {
//     return view('layouts.main-admin');
// });
Route::get('/', function () {
    return view('test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix("admin")
  ->namespace("Admin")
  ->middleware("auth")
  ->name("admin.")
  ->group(function() {

    Route::resource("comics", "ComicController");

    // Route::resource("characters", "CharacterController");

    // Route::resource("categories", "CategoryController");
  });
