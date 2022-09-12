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

                        <div class="col-xs-6 col-md-4 col-lg-2">
                            <a data-toggle="modal" data-target="#modal-luismadeira" class="convidado">
                                <div class="col-xs-12 convidado text-center">
                                    <div class="shadow-img-convidado">
                                        <img alt="Luis Madeira" src="{{asset("images/pessoas/luismadeira.jpg")}}"/></div>
                                </div>
                                <div class="col-xs-12 convidado"><h5>Luis Madeira</h5>
                                </div>
                                <div class="col-xs-12 convidado"><h6>Presidente</h6></div>
                            </a>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="modal-luismadeira" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="fa-solid fa-times fa-lg"></i></span>
                                        </button>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xxs-12 col-xs-12 col-sm-4 col-md-3" style="padding-top: 40px">
                                                    <div class="shadow-img-individual-modal" >
                                                        <img alt="Luis Madeira" class="doctor-img-individual-modal" src="{{asset("images/pessoas/luismadeira.png")}}"/>
                                                    </div>
                                                    <img src="{{asset("images/sppsm_logo_cinza.png")}}" style="width: 80px; float: left; margin-top: 60vh; margin-bottom: 20px" alt="sppsm" class="sppsm-logo-comissoes"/>
                                                </div>
                                                <div class="col-xs-12 col-md-9" style="padding-top: 40px; padding-left: 50px">
                                                    <h2 class="fh5co-section-convidados" style="color:#5d5d5d;margin-top: 0px">Luis Madeira</h2>
                                                    <h4>Presidente</h4>
                                                    <p class="texto"><br>
                                                        Luís Madeira, 39 anos, desenvolve a sua carreira em quatro vertentes síncronas. Médico Psiquiatra, vice-presidente da Sociedade Portuguesa de Psiquiatria e Saúde Mental, licenciado em Medicina pela Universidade de Lisboa em 2008, trabalha no Centro Hospitalar Lisboa Norte (CHLN) e Hospital CUF Descobertas. <br>
                                                        É titular de grau de Mestrado em Filosofia pela Universidade de Central Lancashire e de Doutoramento na área da Filosofia da Psiquiatria. <br>
                                                        É Professor Auxiliar de Ética e Deontologia médica e de Psiquiatria na Faculdade de Medicina da Universidade de Lisboa. É Membro do Conselho Nacional de Ética para as Ciências da Vida. É ainda Psicoterapeuta pela Sociedade Portuguesa de Psicoterapia Centrada no Cliente e Abordagem Centrada na Pessoa</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        @foreach ($organizadora as $convidado)
                            <div class="col-xs-6 col-md-4 col-lg-2" style="margin-bottom: 40px">
                                <a data-toggle="modal" data-target="#modal-{{$convidado["url"]}}" class="convidado">
                                    <div class="col-xs-12 convidado text-center">
                                        <div class="shadow-img-convidado">
                                            <img alt="{{$convidado["name"]}}" src="{{asset("images/pessoas/".$convidado["image"])}}"/></div>
                                    </div>
                                    <div class="col-xs-12 convidado"><h5>{{$convidado["name"]}}</h5>
                                    </div>
                                    {{--                                    <div class="col-xs-12 convidado"><h6>{{$convidado["country"]}}</h6></div>--}}
                                </a>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="modal-{{$convidado["url"]}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i class="fa-solid fa-times fa-lg"></i></span>
                                            </button>
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-xxs-12 col-xs-12 col-sm-4 col-md-3" style="padding-top: 40px">
                                                        <div class="shadow-img-individual-modal" >
                                                            <img alt="{{$convidado["name"]}}" class="doctor-img-individual-modal" src="{{asset("images/pessoas/".$convidado["image"])}}"/>
                                                        </div>
                                                        <img src="{{asset("images/sppsm_logo_cinza.png")}}" style="width: 80px; float: left; margin-top: 60vh; margin-bottom: 20px" alt="sppsm" class="sppsm-logo-comissoes"/>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-12 col-sm-7 col-md-9 modal-text-container" style="padding-top: 40px;">
                                                        <h2 class="fh5co-section-convidados" style="color:#5d5d5d;margin-top: 0px">{{$convidado["name"]}}</h2>
                                                        <h4>{{$convidado["country"]}}</h4>
                                                        <p class="texto">{!! $convidado["description"] !!}</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
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
                            <div class="col-xs-6 col-md-4 col-lg-2" style="margin-bottom: 40px">
                                <a data-toggle="modal" data-target="#modal-{{$convidado["url"]}}" class="convidado">
                                    <div class="col-xs-12 convidado text-center">
                                        <div class="shadow-img-convidado">
                                            <img alt="{{$convidado["name"]}}" src="{{asset("images/pessoas/".$convidado["image"])}}"/></div>
                                    </div>
                                    <div class="col-xs-12 convidado"><h5>{{$convidado["name"]}}</h5>
                                    </div>
{{--                                    <div class="col-xs-12 convidado"><h6>{{$convidado["country"]}}</h6></div>--}}
                                </a>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="modal-{{$convidado["url"]}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i class="fa-solid fa-times fa-lg"></i></span>
                                            </button>
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-xxs-12 col-xs-12 col-sm-4 col-md-3" style="padding-top: 40px">
                                                        <div class="shadow-img-individual-modal" >
                                                            <img alt="{{$convidado["name"]}}" class="doctor-img-individual-modal" src="{{asset("images/pessoas/".$convidado["image"])}}"/>
                                                        </div>
                                                        <img src="{{asset("images/sppsm_logo_cinza.png")}}" style="width: 80px; float: left; margin-top: 60vh; margin-bottom: 20px" alt="sppsm" class="sppsm-logo-comissoes"/>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-12 col-sm-7 col-md-9 modal-text-container" style="padding-top: 40px;">
                                                        <h2 class="fh5co-section-convidados" style="color:#5d5d5d;margin-top: 0px">{{$convidado["name"]}}</h2>
                                                        <h4>{{$convidado["country"]}}</h4>
                                                        <p class="texto">{!! $convidado["description"] !!}</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
