@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" style="height: 13em;" src="{{asset("images/comissoes/cientifica/miguelxavier.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top: 50vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Miguel Xavier</h2>
                    <h4>PORTUGAL</h4>
                    <p><br>
                        NOTA CURRICULAR<br><br>

                        •	Professor Catedrático de Psiquiatria e Saúde Mental – Faculdade de Ciências Médicas da Universidade Nova de Lisboa | NOVA Medical School.<br>
                        •	Subdiretor e Presidente do Conselho Científico da FCM-NMS.<br>
                        •	Director da Coordenação Nacional de Políticas de Saúde Mental – Ministério da Saúde.<br>
                        •	Assistente Graduado Sénior - Departamento de Psiquiatria e Saúde Mental do Centro Hospitalar de Lisboa Ocidental.<br>
                        •	Membro do Conselho Nacional de Ensino e Educação Médica da Ordem dos Médicos.<br>

                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
