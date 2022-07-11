<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends Controller
{

    public function comissoes()
    {
        $organizadora = config("congresso.comissoes.organizadora");
        $cientifica = config("congresso.comissoes.cientifica");
        return view("comissoes", compact("organizadora", "cientifica"));
    }

    public function convidados()
    {
        $estrangeiros = config("congresso.convidados.estrangeiros");
        $nacionais = config("congresso.convidados.nacionais");
        return view("convidados", compact("estrangeiros", "nacionais"));
    }


    public function profile($url)
    {
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
    }
}
