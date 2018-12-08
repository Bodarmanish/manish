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

Route::get('/', function () {
    return view('welcome');

});
/*route::get("first","firstcontrollr@index");

route::get("firstv","studentcontroller@index");

route::get("db","firstcontrollr@query");

route::get("orm","firstcontrollr@insertorm");

route::get("model","firstcontrollr@allquery");

route::get("valid","validate@myform");

route::post("submitmyform","validate@submitmyform");

route::get("model","firstcontrollr@model");

route::resource("movie","moviecontroller");*/

Route::resource("student","studentcontroller");
