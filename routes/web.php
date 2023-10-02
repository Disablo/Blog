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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/city', function() {
    return "My city is Dnipro";
});

Route::get('/hobby', function (){
    return 'Videogames';
});

Route::get('/girlfriend', function() {
    return 'Anel';
});

Route::get('/food', function () {
    return 'pured potato';
});

Route::get('/car', function() {
    return 'VW';
});

Route::get('/flat', function() {
    return 'Bad';
});

Route::get('/style', function() {
    return 'Casual';
});

Route::get('/body_shape', function() {
    return 'triangle';
});

Route::get('/buy', 'App\Http\Controllers\BuyController@index');
Route::get('/currency', 'App\Http\Controllers\CurrencyController@index');
Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::get('/first', 'App\Http\Controllers\MyFirstController@index');
Route::get('/out', 'App\Http\Controllers\OutServiceController@index');

Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('post.index');  
Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('post.create');  
Route::post('/posts', 'App\Http\Controllers\PostController@store')->name('post.store'); 
Route::get('/posts/{post}', 'App\Http\Controllers\PostController@show')->name('post.show');
Route::get('/posts/{post}/edit', 'App\Http\Controllers\PostController@edit')->name('post.edit');
Route::patch('/posts/{post}', 'App\Http\Controllers\PostController@update')->name('post.update');
Route::delete('/posts/{post}', 'App\Http\Controllers\PostController@destroy')->name('post.delete');

Route::get('/post/first_or_create', 'App\Http\Controllers\PostController@first_or_create');
Route::get('/post/update_or_create', 'App\Http\Controllers\PostController@update_or_create');
Route::get('/security', 'App\Http\Controllers\SecurityController@index');
Route::get('/weather', 'App\Http\Controllers\WeatherController@index');

Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');
Route::get('/contacts', 'App\Http\Controllers\ContactsController@index')->name('contacts.index');