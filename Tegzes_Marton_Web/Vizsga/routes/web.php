<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\szavakcontroller;
use App\Http\Controllers\tema;

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

Route::get('/szavak',[szavakcontroller::class,'show']);
Route::get('/tema',[tema::class,'show']);
Route::get('/szavak/tema',[szavakcontroller::class,'show2']);
Route::get('/', function () {
    return view('welcome');
});
