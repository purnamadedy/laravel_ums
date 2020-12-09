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

Route::get('/home/teknisi', function(){
    return view('teknisi');
});

Route::get('/home/pesawat', function(){
    return view('pesawat');
});
Route::get('/home/it', function(){
    return view('it');
});
Route::get('/home/gaji', function(){
    return view('gaji');
});
Route::get('/home/kendaraan', function(){
    return view('Kendaraan');
});