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
    // return view('welcome');
// });

// Route::get('/hello', function () {
    // return '<h1>Hello World<h1>';
// });

// route::get('/about', function () {
    // return view('pages.about');
// });

// Route::get('/users/{id}', function ($id) {
    // return 'This is user '.$id;
// });

// Route::get('/users/{id}/{name}', function ($id,$name) {
    // return 'This is user '.$name.' with an id of '.$id;
// });

Route::get('/', 'PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

Route::resource('posts','PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

/*
<input type="hidden" name="_method" value="PUT">

csrf attack
<form method="POST" action="/profile">
    {{ csrf_field() }}
    ...
</form>
*/