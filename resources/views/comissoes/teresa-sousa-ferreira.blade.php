@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" style="height: 13em;" src="{{asset("images/comissoes/cientifica/teresasousaferreira.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top: 50vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Teresa Sousa Ferreira</h2>
                    <h4>PORTUGAL</h4>
                    <p>EDUCATION<br>
                        Médica Psiquiatra e Assistente Hospitalar de Psiquiatria no Centro Hospitalar entre o Douro e Vouga, EPE (CHEDV). Exerce atividade clínica no Hospital de Dia de Psiquiatria – Unidade de São João da Madeira.<br><br>
                        Presidente da Secção de Perturbações da Personalidade da Sociedade Portuguesa de Psiquiatria e Saúde Mental (SPPSM).<br><br>
                        Formada e Acreditada em Terapia Comportamental Dialética (Dialectical Behavior Therapy - DBT) pela Association for Psychological Therapies no Reino Unido, com especialização em Perturbação de Stress Pós-traumático em Pertubação de Personalidade Borderline tendo tido formação com a Prof. Marsha Linehan e Prof. Melanie Harned.<br><br>
                        Pós-graduada em Perturbações da Personalidade pela Sociedade Espanhola de Medicina Psicossomática e Psicoterapia e pela Universidade San Jorge, Espanha.<br><br>
                        Qualificada como Instrutora de Mindfulness pelo Mindfulness Center Training of University California San Diego, Estados Unidos da América.<br><br>
                        Formação em Mentalization Based Treatment (MBT) no Anna Freud Center com o Prof. Anthony Bateman e Prof. Peter Fonagy, fundadores da terapia.<br><br>
                        Pós-graduada em Terapia Cognitivo-Comportamental e Diplomada em Hipnose Clínica pela London College Of Clinical Hypnosis.<br><br>
                        Pós-graduação em Direção e Gestão de Serviços de Saúde pela Porto Business School.<br><br>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
