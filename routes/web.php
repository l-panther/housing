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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

/* Login and Register page */
Route::get('/', function () {
    return view('auth.login');
});

Route::post('/login', function () {
    return view('auth.login');
});
/* Register page */
Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/terms-and-privacy','AppPagesController@termsPrivacy');

/* Web page */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/listproperty', 'HomeController@listProperty');
Route::get('/viewproperty', 'HomeController@viewProperty');
Route::get('/listfavourite', 'HomeController@listFavourite');
Route::get('/viewfavourite', 'HomeController@viewFavourite');
Route::get('/map', 'HomeController@map');
Route::get('/account', 'HomeController@account');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/terms', 'HomeController@terms');
Route::get('/privacy', 'HomeController@privacy');
Route::get('/delete/{id}', 'HomeController@deleteUser');
Auth::routes();

