@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/comissoes/cientifica/luismadeira.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo_cinza.png")}}" style="width: 150px; float: left; margin-top: 20vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Luís Madeira</h2>
                    <h4>PORTUGAL</h4>
                    <p><br>
                        Luís Madeira, 39 anos, desenvolve a sua carreira em quatro vertentes síncronas. Médico Psiquiatra, vice-presidente da Sociedade Portuguesa de Psiquiatria e Saúde Mental, licenciado em Medicina pela Universidade de Lisboa em 2008, trabalha no Centro Hospitalar Lisboa Norte (CHLN) e Hospital CUF Descobertas. <br>
                        É titular de grau de Mestrado em Filosofia pela Universidade de Central Lancashire e de Doutoramento na área da Filosofia da Psiquiatria. <br>
                        É Professor Auxiliar de Ética e Deontologia médica e de Psiquiatria na Faculdade de Medicina da Universidade de Lisboa. É Membro do Conselho Nacional de Ética para as Ciências da Vida. É ainda Psicoterapeuta pela Sociedade Portuguesa de Psicoterapia Centrada no Cliente e Abordagem Centrada na Pessoa
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
