@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/comissoes/ricardocoentre.png")}}"/>
                    <img src="{{asset("images/sppsm_logo_cinza.png")}}" style="width: 150px; float: left; margin-top: 28vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Maria Luísa Figueira</h2>
                    <h4>PORTUGAL</h4>
                    <p><br>
                        Assistente Graduado Hospitalar de Psiquiatria no Hospital de Santa Maria, Centro Hospitalar Universitário Lisboa Norte EPE.<br>
                        Assistente Convidado na Faculdade de Medicina de Lisboa.<br>
                        Doutorando do Centro Académico de Medicina de Lisboa.<br>
                        Mestrado em Neurociências Afetivas, Universidade de Maastricht, Holanda. 
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection