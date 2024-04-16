<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
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

//

Route::get('hello', function () {
    return 'ini laravel saya';
});

Route::get('angka/{nilai}', function ($nilai) {
    return 'nilai saya adalah : ' . $nilai;
});

Route::get('angka/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'hasil penjumlahan saya : ' . $nilai1 + $nilai2;
});

Route::get('angka/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'hasil pengurangan saya : ' . $nilai1 - $nilai2;
});
Route::get('users/', function (Request $request) {
    return $request;
});
