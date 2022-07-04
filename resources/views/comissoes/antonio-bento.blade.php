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
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top: 20vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">António Bento</h2>
                    <h4>PORTUGAL</h4>
                    <p>EDUCATION<br>
                        Natural de Lisboa (nascido em 13 de agosto de 1954).<br>
                        Licenciado em medicina pela Faculdade de Ciências Médicas de Lisboa.<br>
                        Chefe de Serviço de Psiquiatria (atualmente Assistente Graduado Sénior) desde 2001.<br>
                        Ex-Diretor do Serviço de Psiquiatria Geral e Transcultural / Clínica 3 (Serviço com Acreditação de Qualidade ACSA), do Centro Hospitalar Psiquiátrico de Lisboa (aposentado em 30-11-2021).<br>
                        Trabalha com sem-abrigo e refugiados há mais de 30 anos.<br>
                        Autor de vários livros (“Sem-Amor Sem-Abrigo”, em co-autoria com Elias Barreto; “O sem-amor ou o major sem a serotonina”) e dezenas de artigos científicos.<br>
                        Co-fundador do SMES-EUROPA (Saúde Mental / Exclusão Social –EUROPA), sediado em Bruxelas.<br>
                        Medalha de Mérito Social, atribuída pela Câmara Municipal de Lisboa, em 2018.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
