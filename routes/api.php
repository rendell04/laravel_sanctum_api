<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//view all users
//dapat e auth pa sya bago ma respondang
Route::middleware('auth:sanctum')->get('/users', 'UserController@users');

//view specific users
Route::middleware('auth:sanctum')->get('/user/{id}', 'UserController@user');

//update user
Route::middleware('auth:sanctum')->post('/user', 'UserController@update');
// Delete article
Route::middleware('auth:sanctum')->delete('user/{id}', 'UserController@destroy');

//login
Route::post('/login', 'UserController@index');

//create new user
Route::post('/register', 'UserController@create');

//logout
Route::middleware('auth:sanctum')->get('/logout/{id}', 'UserController@logout');
