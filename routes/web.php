<?php

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

Route::get('/', function () {
    return view('index');
})->name("home");

Route::view('/comissoes', "comissoes")->name("comissoes");
Route::view('/convidados', "convidados")->name("convidados");
Route::view('/programa', "programa")->name("programa");
Route::view('/inscricoes', "inscricoes")->name("inscricoes");
Route::view('/call-for-abstracts', "call-for-abstracts")->name("call.for.abstracts");
Route::view('/informacoes', "informacoes")->name("informacoes");

Route::get("profile/{url}", function($url){
    $estrangeiros = config("congresso.convidados.estrangeiros");
    $nacionais = config("congresso.convidados.nacionais");
    $organizadora = config("congresso.comissoes.organizadora");
    $cientifica = config("congresso.comissoes.cientifica");
    $filteredArray = Arr::where($estrangeiros, function ($value, $key) use ($url) {
        return $value['url'] == $url;
    });

    if(!$filteredArray){
        $filteredArray = Arr::where($nacionais, function ($value, $key) use ($url) {
            return $value['url'] == $url;
        });
    }

    if(!$filteredArray){
        $filteredArray = Arr::where($organizadora, function ($value, $key) use ($url) {
            return $value['url'] == $url;
        });
    }

    if(!$filteredArray){
        $filteredArray = Arr::where($cientifica, function ($value, $key) use ($url) {
            return $value['url'] == $url;
        });
    }

    $pessoa = Arr::flatten($filteredArray);

    return view("perfil", compact("pessoa"));
})->name("profile");

Route::view('/downloads', "downloads")->name("downloads");
Route::view('/local', "local")->name("local");
Route::view('/congresso', "congresso")->name("congresso");
Route::view('/cursos', "cursos")->name("cursos");
Route::view('/questionarios', "questionarios")->name("questionarios");
