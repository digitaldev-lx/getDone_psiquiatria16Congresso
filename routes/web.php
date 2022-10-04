<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Arr;
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

Route::get('optimize', function () {
    Artisan::call('optimize:clear');
    return "Artisan Optimize";
})->name("optimize");

Route::get('/', function () {
    return view('index');
})->name("home");


Route::get('/comissoes', [HomeController::class, "comissoes"])->name("comissoes");
Route::get('/convidados', [HomeController::class, "convidados"])->name("convidados");
Route::get('/profile/{url}', [HomeController::class, "profile"])->name("profile");

Route::view('/programa', "programa")->name("programa");
Route::view('/inscricoes', "inscricoes")->name("inscricoes");
Route::view('/call-for-abstracts', "call-for-abstracts")->name("call.for.abstracts");
Route::view('/informacoes', "informacoes")->name("informacoes");

Route::view('/downloads', "downloads")->name("downloads");
Route::view('/local', "local")->name("local");
Route::view('/congresso', "congresso")->name("congresso");
Route::view('/cursos', "cursos")->name("cursos");
Route::view('/questionarios', "questionarios")->name("questionarios");
