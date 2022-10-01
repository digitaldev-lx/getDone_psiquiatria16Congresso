<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends Controller
{

    public function compareASCII($a, $b) {
        $at = iconv('UTF-8', 'ASCII//TRANSLIT', $a);
        $bt = iconv('UTF-8', 'ASCII//TRANSLIT', $b);
        return strcmp($at, $bt);
    }

    public function comissoes()
    {
        $organizadora = config("congresso.comissoes.organizadora");
        $cientifica = config("congresso.comissoes.cientifica");
        usort($cientifica, function ($item1, $item2) {
            return $this->compareASCII($item1['name'], $item2['name']);
        });
        usort($organizadora, function ($item1, $item2) {
            return $this->compareASCII($item1['name'], $item2['name']);
        });

        return view("comissoes", compact("organizadora", "cientifica"));
    }

    public function convidados()
    {
        $estrangeiros = config("congresso.convidados.estrangeiros");
        $nacionais = config("congresso.convidados.nacionais");
        usort($estrangeiros, function ($item1, $item2) {
            return $this->compareASCII($item1['name'], $item2['name']);
        });
        usort($nacionais, function ($item1, $item2) {
            return $this->compareASCII($item1['name'], $item2['name']);
        });
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