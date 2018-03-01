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

//rutas de pagina
Route::get('/', ['as' => 'home', 'uses' => 'PageController@home']);
Route::get('about', ['as' => 'about', 'uses' => 'PageController@about']);
Route::get('contact', ['as' => 'contact', 'uses' => 'PageController@contact']);

//rutas provisionales
Route::get('item', ['as' => 'item', 'uses' => 'PageController@shopitem']);
Route::get('shop', ['as' => 'shop', 'uses' => 'PageController@shoppage']);

//rutas de login y logout
Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);
Route::get('logout', 'Auth\LoginController@logout');

// ruta para crear usuarios prueba
// Route::get('test', function () {
//     $user = new App\User;
//     $user->usUserName = 'Admin';
//     $user->usEmail = 'admin@admin.com';
//     $user->uspassword = bcrypt('admin');


//     $user->save();
//     return $user;
// });