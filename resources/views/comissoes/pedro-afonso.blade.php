@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" style="height: 13em;" src="{{asset("images/comissoes/cientifica/pedroafonso.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo_cinza.png")}}" style="width: 150px; float: left; margin-top: 30vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Pedro Afonso</h2>
                    <h4>PORTUGAL</h4>
                    <p><br>
                        Médico psiquiatra. Internato complementar de psiquiatria realizado no Hospital Júlio de Matos (2001), tendo mantido funções clínicas neste hospital até 2014. Mestre em Ciências do Sono e Doutorado em Psiquiatria e Saúde Mental pela Faculdade de Medicina de Lisboa. <br>
                        Foi Professor convidado no Instituto de Ciências da Saúde da Universidade Católica Portuguesa, tendo sido o coordenador da Pós-Graduação em Saúde Mental (2011-2017) e Professor Auxiliar de Psiquiatria na Faculdade de Medicina da Universidade de Lisboa (2011-2022). <br><br>
                         
                        Coordenador e autor de vários artigos científicos e livros, dos quais se destacam: Manual de Psiquiatria Clínica, Manual de Psicofarmacologia na Prática Clínica e Dicionário de Psicopatologia. <br>
                        Actualmente, é Senior Teaching Fellow na AESE — Business school, na área de desenvolvimento humano. 
                         
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
