@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" style="height: 13em;" src="{{asset("images/comissoes/cientifica/luizcortezpinto.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top: 50vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Luiz Cortez Pinto</h2>
                    <h4>PORTUGAL</h4>
                    <p><br>
                        Luiz Cortez Pinto, Assistente Graduado Sénior de Psiquiatria.<br>
                        Atualmente é:<br><br>
                        Presidente da Secção de Psiquiatria Geriátrica da SPSM.<br>
                        Membro da Direção da SPGG - Sociedade Portuguesa de Geriatria e Gerontologia desde 2010<br>
                        Membro do International Psychogeriatric Association - IPA  e da European Association of  Geriatric Psychiatry – EAGP<br>
                        Foi membro da Direção, Presidente e Vice - Presidente da APG, Associação Portuguesa de Psicogeriatria de 2002 a 2020<br>
                        Exerceu funções de Diretor de Serviço no Centro Hospitalar Barreiro-Montijo, no CHPL e no Hospital Garcia de Orta.<br>
                        Foi Diretor Clínico do CHPL e do Centro Psicogeriátrico Nª Srª de Fátima (IIHSCJ).<br>
                        Fez cerca de 80 comunicações em Congressos nacionais e 10 em congressos internacionais Colaborou na Organização de 4 congressos Internacionais (Vice-presidente de 2 e Co-chair de 2)<br>
                        Publico cerca de 20 artigos em revistas nacionais (primeiro autor), 2 artigos em revistas internacionais.<br>
                        Autor de4  capítulos de Livros<br>
                        Coeditor do Livro Psicogeriontologia (2006)<br>
                        Diretor de 3 revistas científicas<br>
                        Foi docente na Licenciatura de Medicina (U. do Algarve), Mestrado (FCM e U.C) e Pós-graduação (ISPA e ISCSP)<br>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
