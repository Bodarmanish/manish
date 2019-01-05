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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'PassportController@login');
Route::post('register', 'PassportController@register');
 
Route::middleware('auth:api')->group(function () 
{	
		Route::post('login/pwdchange', 'PassportController@changePassword');
		Route::apiResource('/product','ProductController');

		Route::apiResource('products/{product}/reviews','ReviewsController');
		Route::delete('reviews/{id}','ReviewsController@destroy');

});

