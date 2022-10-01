@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/comissoes/cientifica/marialuisafigueira.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo_cinza.png")}}" style="width: 150px; float: left; margin-top: 28vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Maria Luísa Figueira</h2>
                    <h4>PORTUGAL</h4>
                    <p><br>
                        Professora Catedrática Jubilada de Psiquiatria e Saúde Mental. Fez o doutoramento  na Faculdade de Medicina da Universidade de Lisboa com uma tese intitulada “Relações interpessoais na esquizofrenia. Um estudo experimental”. <br>
                        Foi diretora do Serviço de Psiquiatria do Centro Hospitalar Lisboa Norte (Hospital de Santa Maria) desde 2003 até à sua Jubilação em Janeiro de 2014. Presidente da Sociedade Portuguesa de Psiquiatria no triénio 2013-1015. Fez estudos de investigação em Psicofarmacologia, e estudos experimentais em Psicopatologia do Espectro da Esquizofrenia, da Doença Bipolar e da Ansiedade. <br>
                        Nos últimos anos tem trabalhado na área de Fenomenologia e Epistemologia da Psiquiatria na sua interface com as neurociências.  Publicou mais de 200 artigos em revistas Nacionais e Internacionais, sendo cerca de 60 em revistas indexadas e com revisão por pares. Em 2010 recebeu em Budapeste o prémio de carreira – “European Bipolar Forum Achievement Award”.</p>
                </div>
            </div>
        </div>
    </div>

@endsection