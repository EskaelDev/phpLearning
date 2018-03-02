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

/*Route::get('/', function () {
    $people = ['Taylor', 'Matt', 'Jeffrey'];
    return view('welcome', compact('people'));
});*/
Route::get('/', 'PagesController@home');

Route::get('/string', function () {
    return "Hi, you have just changed the routes file";
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cards', 'CardsController@index');

Route::get('cards/{card}', 'CardsController@show');

