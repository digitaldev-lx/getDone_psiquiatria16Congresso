@extends("layout.index")

@section("content")

    <section id="programa">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados"
             alt="Sociedade Portuguesa de Psiquiatria"/>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-1">
                    <h2 class="fh5co-section-convidados">Programa</h2>
                    <hr class="underline-title-bv" style="margin-left: 32px">
                </div>
                <div class="hidden-xs col-xs-12 col-md-2">
                    <img src="{{asset("images/sppsm_logo.png")}}"
                         style="width: 100px; float: right; margin: 120px -120px 0 0" alt="sppsm" class="sppsm-logo-comissoes"/>
                </div>
            </div>

            <div class="row">
                <div class="hidden-xs col-md-1">
                    <img src="{{asset("images/side-banner.png")}}"
                         class="side-banner-comissoes hidden-xs hidden-sm hidden-md"
                         alt="Sociedade Portuguesa de Psiquiatria"/>
                </div>


                <div class="col-xs-12 col-md-11" style="margin-top: 25px; text-align: left">
                    <div class="row">
                        <div class="col-xs-12 col-md-4 col-md-offset-1 text-center">
                            <img src="{{asset("images/programa.png")}}" style="width: 360px;" alt="XVI Congresso Nacional de Psiquiatria"/>
                            <img src="{{asset("images/download-icon.png")}}" style="width: 80px;margin-top: 1em" alt="XVI Congresso Nacional de Psiquiatria"/>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
