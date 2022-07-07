@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" style="height: 13em;" src="{{asset("images/comissoes/cientifica/susanasousaalmeida.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top: 50vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Susana Sousa Almeida</h2>
                    <h4>PORTUGAL</h4>
                    <p><br>
                        Susana Sousa Almeida, MD, MSc, MRCPsych<br><br>

                        Psiquiatra Consultora no Instituto Português de Oncologia – Porto (IPOP), e no Hospital Cuf Porto, onde coordena a Unidade de Neuropsiquiatria.<br>
                        Membro do Royal College of Psychiatrists (RCPsych) desde 2007.<br>
                        Membro da Direção do Colégio de Psiquiatria da Ordem dos Médicos desde 2021, past-Presidente da Academia Portuguesa de Psicologia (2019-2021), membro dos órgãos sociais da Sociedade Portuguesa de Saúde Mental e Psiquiatria desde 2019.<br>
                        Assistente convidada na FMUP, tem funções de ensino pré-graduado e pós-graduado em Psiquiatria, Psicologia Médica e Comunicação Clínica desde 2001.<br>
                        Os interesses de investigação têm sido ao longo dos anos genética de doenças inflamatórias, comunicação clínica, psico-oncologia, psiconeuroimunologia, neuropsiquiatria, neurobiologia da depressão e psicofarmacologia. Tem mais de 200 comunicações nacionais e internacionais, 11 capítulos de livros e 34 publicações em revistas indexadas (19 resumos e 15 artigos completos) nestes campos.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
