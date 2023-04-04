<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', 'AuthController@login')->name('login');
Route::post('/gees', 'AuthController@login')->name('gees');


Route::get('/gees', function () {
    return view('gees');
})->name('gees');


/*Route::get('/welcome', function () {
    return view('gees');
})->name('welcome');
*/



