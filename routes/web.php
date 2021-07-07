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


Route::resource('/posts', 'App\Http\Controllers\PostsController');
Route::resource('/comments', 'App\Http\Controllers\CommentsController');
//Route::get('/posts/{skelbimoNr}', 'App\Http\Controllers\PostsController@update');
//Route::get('/posts/{skelbimoNr}', 'App\Http\Controllers\PostsController@show');

Route::get('/index', function () {
    return view('ruddit.index');
});
Route::get('/content', function () {
    return view('ruddit.content');
});
Route::get('/profile', function () {
    return view('ruddit.profile');
});
Route::get('/reports', function () {
    return view('ruddit.reports');
});
Route::get('/login', function () {
    return view('ruddit.login');
});
Route::get('/register', function () {
    return view('ruddit.register');
});
Route::get('/awards', function () {
    return view('ruddit.awards');
});
Route::post('/comment/{skelbimoNr}','App\Http\Controllers\PostsController@comment');
Route::post('/like/{skelbimoNr}/{id}','App\Http\Controllers\PostsController@like');
Route::get('/like/{skelbimoNr}/{id}','App\Http\Controllers\PostsController@like');

//Route::post('/destroy/{id}/{ids}','App\Http\Controllers\PostsController@destroy');
//Route::get('/destroy/{id}/{ids}','App\Http\Controllers\PostsController@destroy');
