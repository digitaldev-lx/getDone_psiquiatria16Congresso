@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-1">
                    <h2 class="fh5co-section-convidados">Convidados Nacionais e Internacionais</h2>
                    <hr class="underline-title">
                </div>
                <div class="col-md-2 hidden-xs hidden-sm hidden-md">
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: right; margin-top: 120px" alt="sppsm"/>
                </div>
            </div>
        </div>
        @php
            $convidados = [
                [
                    "name" => "Amelia Fiske",
                    "country" => "GERMANY",
                    "image" => "AMELIA_FISKE.jpg",
                    "url" => "amelia-fiske"
                ]
                ,[
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
                    "name" => "Laurel Riek",
                    "country" => "USA",
                    "image" => "LAUREL_RIEK.jpg",
                    "url" => "laurel-riek"
                ],
                [
                    "name" => "Mads Henriksen",
                    "country" => "USA",
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
                    "name" => "Tom K J Craig",
                    "country" => "UK",
                    "image" => "TOM_CRAIG.jpg",
                    "url" => "tom-craig "
                ],

            ]
        @endphp

    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <div class="container pl-6">
                    <div class="row">
                    @foreach ($convidados as $convidado)
                    <div class="col-xs-3 col-md-2 row">
                        <a href="{{route("convidado", $convidado["url"])}}" class="convidado">
                            <div class="col-xs-12 convidado"><img alt="{{$convidado["name"]}}" src="{{asset("images/convidados/".$convidado["image"])}}"/></div>
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

@endsection
