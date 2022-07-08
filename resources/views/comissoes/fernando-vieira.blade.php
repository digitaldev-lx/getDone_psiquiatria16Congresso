@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/comissoes/cientifica/fernandovieira.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top: 50vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Fernando Vieira</h2>
                    <h4>PORTUGAL</h4>
                    <p><br>
                        Fernando Vieira é médico, é assistente graduado sénior de psiquiatria no Serviço de Psiquiatria Forense do Centro Hospitalar Psiquiátrico de Lisboa, local para onde transitou após a anterior Direção do Serviço de Psiquiatria e posteriormente de Clínica Forense do INMLCF,IP na delegação sul em Lisboa (2004 a 2013). <br>
                        É assessor do Programa Nacional de Saúde Mental da DGS para assuntos relacionados com a Psiquiatria Forense. <br>
                        Pós-graduado com o Curso Superior de Medicina Legal e de Direito Biomédico. Membro da Direção da Secção da Subespecialidade de Psiquiatria Forense do Colégio de Psiquiatria da Ordem dos Médicos. <br>
                        Integrou as quatro comissões nomeadas para acompanhar o regime do internamento compulsivo, presidindo na actualidade essa Comissão Nacional de Acompanhamento da Lei de Saúde Mental e tendo integrado o grupo de trabalho nomeado em Despacho conjunto ministerial para elaborar uma proposta de revisão da Lei 36/98 de 24/07. <br>
                        Integra igualmente outro um grupo de trabalho Justiça/Saúde por nomeação por Despacho conjunto, para acompanhar a execução do Decreto lei 70/2019 de 24/05 relativo à execução das medidas de segurança e tratamento de inimputáveis com perigosidade.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
