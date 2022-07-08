@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/convidados/guilhermequeiroz.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top: 30vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Guilherme Queiroz</h2>
                    <h4>PORTUGAL</h4>
                    <p><br>
                        Médico interno de Saúde Pública no ACES Baixo Vouga. <br>
                        Atualmente colaborador no Instituto de Salud Global em Barcelona, onde trabalha em projetos na área da saúde planetária. <br>
                        Completou o Curso de Especialização em Saúde Pública na Escola Nacional de Saúde Pública da Universidade Nova de Lisboa em 2021, e o Mestrado Integrado em Medicina da Faculdade de Medicina da Universidade de Coimbra em 2017.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
