@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/comissoes/mariajoaoheitor.png")}}"/>
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top: 28vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Maria João Heitor</h2>
                    <h4>PORTUGAL</h4>
                    <p>EDUCATION<br>
                        Maria João Heitor, Assistente Graduada Sénior de Psiquiatria, Diretora do Departamento de Psiquiatria e Saúde Mental e do Serviço de Psiquiatria do Hospital Beatriz Ângelo (HBA) – Hospital de Loures, EPE e Presidente da Comissão de Ética do HBA. <br>
                        Psiquiatra na Casa de Saúde da Idanha do IIHSCJ. Doutorada em Medicina pela Faculdade de Medicina, Universidade de Lisboa (FMUL). Investigadora no Environmental Health Behaviour Lab, Instituto de Saúde Ambiental, FMUL. Professora Auxiliar Convidada e Coordenadora da Psicopatologia e Saúde Mental da Faculdade de Medicina da Universidade Católica Portuguesa. <br>
                        Foi diretora de serviços de Psiquiatria e Saúde Mental da Direção-Geral da Saúde, assessora do Conselho Diretivo e responsável pela Unidade de Promoção da Saúde do Instituto Nacional de Saúde Doutor Ricardo Jorge, e representante junto da OMS e CE para a saúde mental e problemas ligados ao álcool. Atualmente, é membro do Conselho Nacional de Saúde Mental e da direção do Colégio de Psiquiatria da Ordem dos Médicos. Presidente da Sociedade Portuguesa de Psiquiatria e Saúde Mental (SPPSM).</p>
                </div>
            </div>
        </div>
    </div>

@endsection
