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

Route::get('check', function(){

 echo phpinfo();

});

Route::get('brand/{id}', function(){

 return "success";

});

Route::get('deploy-success', function(){


 return "working done check";

});

Route::get('final-deploay', function(){

 return "working done smjhh";
});