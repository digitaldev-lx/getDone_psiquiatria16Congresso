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
            ]
    @endphp
    <section id="convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-1">
                    <h2 class="fh5co-section-convidados">Comissões</h2>
                    <hr class="underline-title" style="margin-left: 30px">
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
                                <a href="{{route("convidado", $convidado["url"])}}" class="convidado">
                                    <div class="col-xs-12 convidado text-center"><img alt="{{$convidado["name"]}}" src="{{asset("images/comissoes/".$convidado["image"])}}"/></div>
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
