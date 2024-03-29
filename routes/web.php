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

// Route::get('/', function () {
//     return view('illustrations');
// });

Route::get('/', 'PhotoController@index');


Route::get('/test-illustrations', 'PhotoController@index');


Route::get('photography', 'PhotoController@photography');

Route::get('animals', 'PhotoController@animals');

Route::get('poetry', function () {
    return view('poetry');
});


Route::get('about', function () {
    return view('about');
});


Route::get('contact', function () {
    return view('contact');
});
