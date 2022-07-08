@extends("layout.index")

@section("content")
    @php
        $organizadora = [
            [
                "name" => "Luis Madeira",
                "country" => "PORTUGAL",
                "image" => "luismadeira.png",
                "url" => "luis-madeira"
            ],
            [
                "name" => "Maria João Heitor",
                "country" => "PORTUGAL",
                "image" => "mariajoaoheitor.png",
                "url" => "maria-joao-heitor"
            ],
            [
                "name" => "Maria Luísa Figueira",
                "country" => "PORTUGAL",
                "image" => "marialuisafigueira.png",
                "url" => "maria-luisa-figueira"
            ],
            [
                "name" => "Ricardo Coentre",
                "country" => "PORTUGAL",
                "image" => "ricardocoentre.png",
                "url" => "ricardo-coentre"
            ]
            ];


        $cientifica = [
                [
                    "name" => "António Bento",
                    "country" => "PORTUGAL",
                    "image" => "luismadeira.jpg",
                    "url" => "antonio-bento"
                ],
                [
                    "name" => "António Macedo",
                    "country" => "PORTUGAL",
                    "image" => "antoniomacedo.jpg",
                    "url" => "antonio-macedo"
                ],
                [
                    "name" => "António Reis Marques",
                    "country" => "PORTUGAL",
                    "image" => "antoniomarques.jpg",
                    "url" => "antonio-reis-marques"
                ],
                [
                    "name" => "Carlos Braz Saraiva",
                    "country" => "PORTUGAL",
                    "image" => "carlossaraiva.jpg",
                    "url" => "carlos-braz-saraiva"
                ],
                [
                    "name" => "Fernando Vieira",
                    "country" => "PORTUGAL",
                    "image" => "fernandovieira.jpg",
                    "url" => "fernando-vieira"
                ],
                [
                    "name" => "François Gysin",
                    "country" => "PORTUGAL",
                    "image" => "francoisgysin.jpg",
                    "url" => "francois-gysin"
                ],
                [
                    "name" => "Guida da Ponte",
                    "country" => "PORTUGAL",
                    "image" => "guidadaponte.jpg",
                    "url" => "guida-da-ponte"
                ],
                [
                    "name" => "Lia Fernandes",
                    "country" => "PORTUGAL",
                    "image" => "liafernandes.jpg",
                    "url" => "lia-fernandes"
                ],
                [
                    "name" => "Luis Câmara Pestana",
                    "country" => "PORTUGAL",
                    "image" => "luiscamarapestana.jpg",
                    "url" => "luis-camara-pestana"
                ],
                [
                    "name" => "Luis Madeira",
                    "country" => "PORTUGAL",
                    "image" => "luismadeira.jpg",
                    "url" => "luis-madeira"
                ],
                [
                    "name" => "Luiz Cortez Pinto",
                    "country" => "PORTUGAL",
                    "image" => "luizcortezpinto.jpg",
                    "url" => "luiz-cortez-pinto"
                ],
                [
                    "name" => "Maria Luísa Figueira",
                    "country" => "PORTUGAL",
                    "image" => "marialuisafigueira.png",
                    "url" => "maria-luisa-figueira"
                ],
                [
                    "name" => "Miguel Xavier",
                    "country" => "PORTUGAL",
                    "image" => "miguelxavier.jpg",
                    "url" => "miguel-xavier"
                ],
                [
                    "name" => "Nuno Madeira",
                    "country" => "PORTUGAL",
                    "image" => "nunomadeira.jpg",
                    "url" => "nuno-madeira"
                ],
                [
                    "name" => "Nuno Sousa",
                    "country" => "PORTUGAL",
                    "image" => "nunosousa.jpg",
                    "url" => "nuno-sousa"
                ],
                [
                    "name" => "Pedro Afonso",
                    "country" => "PORTUGAL",
                    "image" => "pedroafonso.jpg",
                    "url" => "pedro-afonso"
                ],
                [
                    "name" => "Pedro Câmara Pestana",
                    "country" => "PORTUGAL",
                    "image" => "pedrocamarapestana.jpg",
                    "url" => "pedro-camara-pestana"
                ],
                [
                    "name" => "Pedro Ribeiro Branco",
                    "country" => "PORTUGAL",
                    "image" => "pedroribeirobranco.jpg",
                    "url" => "pedro-ribeiro-branco"
                ],
                [
                    "name" => "Susana Sousa Almeida",
                    "country" => "PORTUGAL",
                    "image" => "susanasousaalmeida.jpg",
                    "url" => "susana-sousa-almeida"
                ],
                [
                    "name" => "Teresa Sousa Ferreira",
                    "country" => "PORTUGAL",
                    "image" => "teresasousaferreira.jpg",
                    "url" => "teresa-sousa-ferreira"
                ]
                ]
    @endphp
    <section id="comissoes">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-1">
                    <h2 class="fh5co-section-convidados">Comissões</h2>
                    <hr class="underline-title-bv" style="margin-left: 30px">
                </div>
                <div class="hidden-xs col-xs-12 col-md-2">
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 100px; float: right; margin: 120px -120px 0 0" alt="sppsm"/>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-1">
                    <h2 class="fh5co-section-convidados" style="margin-top: 30px">Organizadora</h2>
                </div>
            </div>
            <div class="row">
                <div class="hidden-xs col-md-1">
                    <img src="{{asset("images/side-banner.png")}}" class="side-banner-comissoes hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
                </div>

                <div class="col-xs-12 col-md-11" style="margin-top: 25px">
                    <div class="row">

                        @foreach ($organizadora as $convidado)
                            <div class="col-xs-4 col-md-2">
                                <a href="{{route("comissoes.perfil", $convidado["url"])}}" class="convidado">
                                    <div class="col-xs-12 convidado text-center">
                                        <div class="shadow-img-convidado">
                                            <img alt="{{$convidado["name"]}}" src="{{asset("images/comissoes/".$convidado["image"])}}"/></div>
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

            <div class="row" style="margin-top: 130px">
                <div class="col-xs-12 col-md-8 col-md-offset-1">
                    <h2 class="fh5co-section-convidados" style="margin-top: 30px">Científica</h2>
                </div>
            </div>
            <div class="row">
                <div class="hidden-xs col-md-1">
                </div>

                <div class="col-xs-12 col-md-11" style="margin-top: 25px">
                    <div class="row">

                        @foreach ($cientifica as $convidado)
                            <div class="col-xs-4 col-md-2">
                                <a href="{{route("comissoes.perfil", $convidado["url"])}}" class="convidado">
                                    <div class="col-xs-12 convidado text-center">
                                        <div class="shadow-img-convidado">
                                            <img alt="{{$convidado["name"]}}" src="{{asset("images/comissoes/cientifica/".$convidado["image"])}}"/></div>
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
