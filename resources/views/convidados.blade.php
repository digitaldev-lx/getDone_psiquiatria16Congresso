@extends("layout.index")

@section("content")
    @php

        $estrangeiros = [
            [
                "name" => "Alfredo Barboza",
                "country" => "GERMANY",
                "image" => "AMELIA_FISKE.jpg",
                "url" => "alfredo-cuellar-barboza"
            ],
            [
                "name" => "Amelia Fiske",
                "country" => "GERMANY",
                "image" => "AMELIA_FISKE.jpg",
                "url" => "amelia-fiske"
            ],
            [
                "name" => "Ana Ciaunica",
                "country" => "GERMANY",
                "image" => "AMELIA_FISKE.jpg",
                "url" => "ana-ciaunica"
            ],
            [
                "name" => "Axel Seemann",
                "country" => "UK",
                "image" => "Axel_Seemann.jpg",
                "url" => "axel-seemann"
            ],
            [
                "name" => "Brendan Kelly",
                "country" => "IRELAND",
                "image" => "Brendan_Kelly.jpg",
                "url" => "brendan-kelly"
            ],
            [
                "name" => "Christoph U. Correll",
                "country" => "USA",
                "image" => "CHRISTOPH_CORRELL.JPG",
                "url" => "christoph-correll"
            ],
            [
                "name" => "Daniel Freeman",
                "country" => "UK",
                "image" => "DANIEL_FREEMAN.jpg",
                "url" => "daniel-freeman"
            ],
            [
                "name" => "Gerhard Gründer",
                "country" => "GERMANY",
                "image" => "GERHARD_GRUNDER.jpg",
                "url" => "gerhard-grunder"
            ],
            [
                "name" => "Irmgard Emmelhainz",
                "country" => "MEXICO",
                "image" => "IRMGARD_EMMELHAINZ.jpg",
                "url" => "irmgard-emmelhainz"
            ],
            [
                "name" => "Joel Krueger",
                "country" => "MEXICO",
                "image" => "IRMGARD_EMMELHAINZ.jpg",
                "url" => "joel-krueger"
            ],
            [
                "name" => "Laurel Riek",
                "country" => "USA",
                "image" => "LAUREL_RIEK.jpg",
                "url" => "laurel-riek"
            ],
            [
                "name" => "Mads Henriksen",
                "country" => "DENMARK",
                "image" => "MADS_HENRIKSEN.jpg",
                "url" => "mads-henriksen"
            ],
            [
                "name" => "Norma Verdolini",
                "country" => "ITALY",
                "image" => "NORMA_VERDOLINI.png",
                "url" => "norma-verdolini"
            ],
            [
                "name" => "Ole Andreassen",
                "country" => "NORWAY",
                "image" => "OLE_ANDREASSEN.jpg",
                "url" => "ole-andreassen"
            ],
            [
                "name" => "Raffaella Pocobello",
                "country" => "ITALY",
                "image" => "RAFFAELLA_POCOBELLO.jpg",
                "url" => "raffaella-pocobello"
            ],
            [
                "name" => "Richard Gipps ",
                "country" => "UK",
                "image" => "RICHARD_GIPPS.jpeg",
                "url" => "richard-gipps"
            ],
            [
                "name" => "Swapnil Gupta",
                "country" => "UK",
                "image" => "RICHARD_GIPPS.jpeg",
                "url" => "swapnil-gupta"
            ],
            [
                "name" => "Tom K J Craig",
                "country" => "UK",
                "image" => "TOM_CRAIG.jpg",
                "url" => "tom-craig"
            ],

        ];
        $nacionais = [
                    [
                        "name" => "Carolina Perdigoto",
                        "country" => "PORTUGAL",
                        "image" => "AMELIA_FISKE.jpg",
                        "url" => "carolina-perdigoto"
                    ],
                    [
                        "name" => "Ciro Oliveiro",
                        "country" => "PORTUGAL",
                        "image" => "AMELIA_FISKE.jpg",
                        "url" => "ciro-oliveiro"
                    ],
                    [
                        "name" => "Gonçalo Graça Pereira",
                        "country" => "PORTUGAL",
                        "image" => "AMELIA_FISKE.jpg",
                        "url" => "goncalo-graca-pereira"
                    ],
                    [
                        "name" => "Guilherme Queiroz",
                        "country" => "PORTUGAL",
                        "image" => "guilhermequeiroz.jpg",
                        "url" => "guilherme-queiroz"
                    ],
                    [
                        "name" => "Inês Cargaleiro",
                        "country" => "PORTUGAL",
                        "image" => "Brendan_Kelly.jpg",
                        "url" => "ines-cargaleiro"
                    ],
                    [
                        "name" => "João Pedro Frois",
                        "country" => "PORTUGAL",
                        "image" => "joaopedrofrois.jpg",
                        "url" => "joao-pedro-frois"
                    ],
                    [
                        "name" => "Miguel Nascimento",
                        "country" => "PORTUGAL",
                        "image" => "miguelnascimento.jpg",
                        "url" => "miguel-nascimento"
                    ],
                    [
                        "name" => "Pedro Gamito",
                        "country" => "PORTUGAL",
                        "image" => "pedrogamito.jpg",
                        "url" => "pedro-gamito"
                    ],
                    [
                        "name" => "Rui Henriques",
                        "country" => "PORTUGAL",
                        "image" => "IRMGARD_EMMELHAINZ.jpg",
                        "url" => "rui-henriques"
                    ],
                    [
                        "name" => "Tiago Maia",
                        "country" => "PORTUGAL",
                        "image" => "IRMGARD_EMMELHAINZ.jpg",
                        "url" => "tiago-maia"
                    ],
                   ];
    @endphp
    <section id="convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados"
             alt="Sociedade Portuguesa de Psiquiatria"/>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-1">
                    <h2 class="fh5co-section-convidados">Convidados Nacionais e Estrangeiros</h2>
                    <hr class="underline-title-bv" style="margin-left: 32px">
                </div>
                <div class="hidden-xs col-xs-12 col-md-2">
                    <img src="{{asset("images/sppsm_logo.png")}}"
                         style="width: 100px; float: right; margin: 120px -120px 0 0" alt="sppsm" class="sppsm-logo-convidados"/>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-1">
                    <h2 class="fh5co-section-convidados" style="margin-top: 30px">Nacionais</h2>
                </div>
            </div>
            <div class="row">
                <div class="hidden-xs col-md-1">
                    <img src="{{asset("images/side-banner.png")}}"
                         class="side-banner-comissoes hidden-xs hidden-sm hidden-md"
                         alt="Sociedade Portuguesa de Psiquiatria"/>
                </div>

                <div class="col-xs-12 col-md-11" style="margin-top: 25px">
                    <div class="row">

                        @foreach ($nacionais as $convidado)
                            <div class="col-xs-6 col-md-2">
                                <a href="{{route("convidado", $convidado["url"])}}" class="convidado">
                                    <div class="col-xs-12 convidado text-center">
                                        <div class="shadow-img-convidado">
                                            <img alt="{{$convidado["name"]}}" src="{{asset("images/convidados/".$convidado["image"])}}"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 convidado"><h5>{{$convidado["name"]}}</h5>
                                    </div>
                                    <div class="col-xs-12 convidado"><h6>{{$convidado["country"]}}</h6></div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 50px">
                <div class="col-xs-12 col-md-8 col-md-offset-1">
                    <h2 class="fh5co-section-convidados" style="margin-top: 30px">Estrangeiros</h2>
                </div>
            </div>
            <div class="row">
                <div class="hidden-xs col-md-1">
                </div>

                <div class="col-xs-12 col-md-11" style="margin-top: 25px">
                    <div class="row">

                        @foreach ($estrangeiros as $convidado)
                            <div class="col-xs-6 col-md-2">
                                <a href="{{route("comissoes.perfil", $convidado["url"])}}" class="convidado">
                                    <div class="col-xs-12 convidado text-center">
                                        <div class="shadow-img-convidado">
                                            <img alt="{{$convidado["name"]}}" src="{{asset("images/convidados/".$convidado["image"])}}"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 convidado"><h5>{{$convidado["name"]}}</h5>
                                    </div>
                                    <div class="col-xs-12 convidado"><h6>{{$convidado["country"]}}</h6></div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
