<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Users
Route::post('users/signup','UsersController@signup');
Route::post('users/login','AuthController@login');
Route::post('users/logout','AuthController@login');

//Home page in the Mobile
Route::get('home','productApiController@home');

//Get the products of each category
Route::get('category/{id}','productApiController@categoryProducts');

//Detailed info about each product [ single product screen ]
Route::get('product/{id}','productApiController@singleProduct');