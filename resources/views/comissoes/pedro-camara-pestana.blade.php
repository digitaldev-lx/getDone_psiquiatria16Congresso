@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" style="height: 13em;" src="{{asset("images/comissoes/cientifica/pedrocamarapestana.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo_cinza.png")}}" style="width: 150px; float: left; margin-top: 50vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Pedro Câmara Pestana</h2>
                    <h4>PORTUGAL</h4>
                    <p><br>
                        <b>Pedro Abecasis do Nascimento da Câmara Pestana</b>
                        <br><br>
                        Mestrado Integrado em Medicina pela Faculdade de Medicina da Universidade de Lisboa, 2009-2015<br>
                        Internato de Ano Comum no Hospital Professor Doutor Fernando da Fonseca, 2016<br>
                        Internato de Psiquiatria no Centro Hospitalar Universitário Lisboa Norte – Hospital Santa Maria, Serviço de Psiquiatria e Saúde Mental, 2017-2022<br>
                        Assistente Convidado de Psiquiatria e Psicologia Médica da Faculdade de Medicina da Universidade de Lisboa, desde 2021<br>
                        Estudante de Doutoramento do Programa de Doutoramento do Centro Académico de Medicina de Lisboa, desde 2022<br>
                        <br>
                        Outras Atividades de Interesse Clínico-Científico<br>
                        Editor-Chefe da secção AMP Student da Acta Médica Portuguesa, 2016<br>
                        Visita Formativa aos escritórios do British Medical Journal em Londres, 2016<br>
                        Editor associado da Revista Portuguesa de Psiquiatria e Saúde Mental, desde 2018<br>
                        Estágio Clínico em perturbações neurocognitivas na Fundació ACE Barcelona Alzheimer Treatment and Research Center, 2019<br>

                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
