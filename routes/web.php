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
    return view('index');
})->name("home");

Route::view('/gallery', "gallery")->name("gallery");
Route::view('/downloads', "downloads")->name("downloads");
Route::view('/local', "local")->name("local");
Route::view('/congresso', "congresso")->name("congresso");
Route::view('/cursos', "cursos")->name("cursos");
Route::view('/questionarios', "questionarios")->name("questionarios");
