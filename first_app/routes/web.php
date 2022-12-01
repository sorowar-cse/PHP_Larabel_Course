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

// Creating First Route in Laravel
Route::get('/about', function () { 
    // return view('about');
    return "About Page";
});

// Creating Second Route in Laravel
Route::get('/me', function () { //Callback Function
    // return view('contact');
    return "I'm Sorowar Mahabub";
});
