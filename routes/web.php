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

//Route::resource('views','PageController');

Route::get('/', ['as' => 'home', 'uses' => 'PageController@home']);
Route::get('about', ['as' => 'about', 'uses' => 'PageController@about']);
Route::get('contact', ['as' => 'contact', 'uses' => 'PageController@contact']);

// 
Route::get('item', ['as' => 'item', 'uses' => 'PageController@shopitem']);
Route::get('shop', ['as' => 'shop', 'uses' => 'PageController@shoppage']);

Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');

// Route::get('test', function () {
//     $user = new App\User;
//     $user->name = 'Admin';
//     $user->email = 'admin@admin.com';
//     $user->password = bcrypt('admin');


//     $user->save();
//     return $user;
// });