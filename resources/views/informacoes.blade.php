@extends("layout.index")

@section("content")

    <section id="programa">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados"
             alt="Sociedade Portuguesa de Psiquiatria"/>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-1">
                    <h2 class="fh5co-section-convidados">Informações</h2>
                    <hr class="underline-title" style="margin-left: 32px">
                </div>
                <div class="hidden-xs col-xs-12 col-md-2">
                    <img src="{{asset("images/sppsm_logo.png")}}"
                         style="width: 100px; float: right; margin: 120px -120px 0 0" alt="sppsm"/>
                </div>
            </div>

            <div class="row" style="margin-top: 45px;">
                <div class="hidden-xs col-md-1">
                    <img src="{{asset("images/side-banner.png")}}"
                         class="side-banner-comissoes hidden-xs hidden-sm hidden-md"
                         alt="Sociedade Portuguesa de Psiquiatria"/>
                </div>

                <div class="col-xs-12 col-md-10 col-md-offset-1">

                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <h3 class="inscricoes-sub-lead-title">AGÊNCIA OFICIAL / PCO:</h3>
                            <img src="{{asset("images/getdone_dark.png")}}" style="width: 160px"/>
                            <h3 class="inscricoes-sub-lead">
                                Rua Mariana Vilar n.o 3 B | 1600-220 Lisboa <br>
                                Telefone: +351 21 752 54 19<br>
                                Email: meetings@getdone.pt
                            </h3>

                            <h3 class="inscricoes-sub-lead-title">LOCAL DO CONGRESSO:</h3>
                            <h3 class="inscricoes-sub-lead">
                                PALÁCIO DE CONGRESSOS DO ALGARVE <br>
                                Herdade dos Salgados<br>
                                Telf.: 289 244 200
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <h3 class="inscricoes-sub-lead-title">COMO CHEGAR</h3>
                            <h3 class="inscricoes-sub-lead-title">Vindo do Porto</h3>



                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
