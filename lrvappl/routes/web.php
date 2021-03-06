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
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return view('pages.hello');
// });

// Route::get('/users/{id}/{user}', function ($user,$id) {
//     return 'this is user '.$user.' with id of '.$id;
// });

// Route::get('/index', function () {
//     return 'pages.index';
// });

// Route::get('/about', function () {
//     return 'pages.about';
// });

// Route::get('/services', function () {
//     return 'pages.services';
// });

// Route::get('/',function(){
//     return view('welcome');
// });
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
