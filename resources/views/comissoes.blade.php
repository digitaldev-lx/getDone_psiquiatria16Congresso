@extends("layout.index")

@section("content")

    <section id="comissoes">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-1">
                    <h2 class="fh5co-section-convidados">Comissões</h2>
                    <hr class="underline-title-bv" style="margin-left: 30px">
                </div>
                <div class="hidden-xs col-xs-12 col-md-2">
                    <img src="{{asset("images/sppsm_logo_cinza.png")}}" class="sppsm-logo-comissoes" style="width: 100px; float: right; margin: 120px -120px 0 0" alt="sppsm"/>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-1">
                    <h2 class="fh5co-section-convidados" style="margin-top: -20px">Organizadora</h2>
                </div>
            </div>
            <div class="row">
                <div class="hidden-xs col-md-1">
                    <img src="{{asset("images/side-banner.png")}}" class="side-banner-comissoes hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
                </div>
                <div class="col-xs-12 col-md-11" style="margin-top: 25px">
                    <div class="row">

                        <div class="col-xs-6 col-md-2">
                            <a href="{{route("profile", "luis-madeira")}}" class="convidado">
                                <div class="col-xs-12 convidado text-center">
                                    <div class="shadow-img-convidado">
                                        <img alt="Luis Madeira" src="{{asset("images/pessoas/luismadeira.jpg")}}"/></div>
                                </div>
                                <div class="col-xs-12 convidado"><h5>Luis Madeira</h5>
                                </div>
                                <div class="col-xs-12 convidado"><h6>Presidente</h6></div>
                            </a>
                        </div>
                        @foreach ($organizadora as $convidado)
                            <div class="col-xs-6 col-md-2" style="margin-bottom: 40px">
                                <a href="{{route("profile", $convidado["url"])}}" class="convidado">
                                    <div class="col-xs-12 convidado text-center">
                                        <div class="shadow-img-convidado">
                                            <img alt="{{$convidado["name"]}}" src="{{asset("images/pessoas/".$convidado["image"])}}"/></div>
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
                            <div class="col-xs-6 col-md-2" style="margin-bottom: 40px">
                                <a href="{{route("profile", $convidado["url"])}}" class="convidado">
                                    <div class="col-xs-12 convidado text-center">
                                        <div class="shadow-img-convidado">
                                            <img alt="{{$convidado["name"]}}" src="{{asset("images/pessoas/".$convidado["image"])}}"/></div>
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
