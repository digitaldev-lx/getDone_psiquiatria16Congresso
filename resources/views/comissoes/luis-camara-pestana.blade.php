@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" style="height: 13em;" src="{{asset("images/comissoes/cientifica/luiscamarapestana.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top: 50vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Luis Câmara Pestana</h2>
                    <h4>PORTUGAL</h4>
                    <p>EDUCATION<br>
                        Luís Câmara Pestana, diretor do Serviço de Psiquiatria e Saúde Mental do Centro Hospitalar Lisboa Norte - Hospital de Santa Maria (CHLN) chefe de serviço de Psiquiatria. <br>
                        Especialista em Psiquiatria e Farmacologia Clínica pela Ordem dos Médicos. <br>
                        Professor Convidado de Clínica da Faculdade de Medicina de Lisboa. <br>
                        Coordenador do Núcleo de Gerontopsiquiatria do HSM-CHULN. <br>
                        Consultor da Direção-Geral de Saúde na área da Psiquiatria. <br>
                        Consultor do INFARMED. Membro da “Comissão de Avaliação de Medicamentos” do INFARMED. <br>
                        Presidente do Conselho Fiscal da Sociedade Portuguesa de Psiquiatria e Saúde Mental. <br>
                        Antigo presidente da Associação Portuguesa de Psiquiatria Biológica. <br>
                        Durante 10 anos foi membro da Direção do Colégio da Especialidade de Psiquiatria da Ordem dos Médicos de (1996 - 1997 e 2009 a 2017).<br><br>

                        É autor e co-autor de 49 trabalhos científicos, publicados em revistas nacionais e internacionais e de capítulos de livros no âmbito da psiquiatria clínica, gerontopsiquiatria, psicofarmacologia e epilepsia. Sobre os mesmos temas é responsável por 310 palestras e comunicações científicas em reuniões nacionais e internacionais.


                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
