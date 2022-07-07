@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" style="height: 13em;" src="{{asset("images/comissoes/cientifica/nunomadeira.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top: 30vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Nuno Madeira</h2>
                    <h4>PORTUGAL</h4>
                    <p><br>
                        Assistente Hospitalar Graduado de Psiquiatria no Centro Hospitalar e Universitário de Coimbra<br><br>
                        Professor Auxiliar Convidado da Faculdade de Medicina da Universidade de Coimbra<br><br>
                        Membro Integrado do Coimbra Institute for Biomedical Imaging and Translational Research<br><br>
                        Presidente da Secção do Primeiro Episódio Psicótico da Sociedade Portuguesa de Psiquiatria e Saúde Mental<br><br>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
