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

// Route::get('/', function () {
//     return view('welcome');
// });

// Creating First Route in Laravel
Route::get('/sorowar', function () { 
    // return view('about');
    return "Yeahh, Sorowar is here";
});

// Creating Second Route in Laravel
Route::get('/me', function () { //Callback Function
    // return view('contact');
    return "I'm Sorowar Mahabub";
});


Route::get('/', function () {
        return view('Home');
    });

// Creating Third Route in Laravel
Route::get('/about', function () { //Callback Function
    return view('about');
});

// Creating Fourth Route in Laravel
Route::get('/contact', function () { //Callback Function
    return view('contact');
});

// Creating Fifth Route in Laravel
Route::get('/home1', 'App\Http\Controllers\DemoController@Home1');
Route::get('/about1', 'App\Http\Controllers\DemoController@About1');
Route::get('/contact1', 'App\Http\Controllers\DemoController@Contact1');