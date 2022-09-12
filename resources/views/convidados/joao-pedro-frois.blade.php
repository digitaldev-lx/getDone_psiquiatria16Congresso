@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/convidados/joaopedrofrois.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo_cinza.png")}}" style="width: 150px; float: left; margin-top: 30vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">João Pedro Fróis</h2>
                    <h4>PORTUGAL</h4>
                    <p><br>
                        João Pedro Fróis (Lisboa, 1957) investigador e docente universitário. Doutorado pela Universidade de Lisboa. Investigador Auxiliar Convidado da Faculdade de Medicina da Universidade de Lisboa (FM-UL). Trabalhou mais de uma década como psicólogo na área dos cuidados de saúde mental e reabilitação de crianças e jovens. Coordenou o Programa Gulbenkian Investigação e Desenvolvimento Estético (1997-2004).<br>
                        É Fellow da International Association of Empirical Aesthetics (IAEA) e Investigador afiliado do Center for Phenomenological Psychology and Aesthetics (CPPA), Universidade de Copenhaga. Áreas de investigação: Psicologia da Estética, Criatividade e Artes Visuais, Estudos de Museus de Arte (Educação), Arte Bruta/Outsider, História da Educação [Médico Pedagogia]. <br>
                        Recentemente publicou nas revistas: Curator: The Museum Journal, Raw Vision Magazine, Psychology & Culture, History of Psychiatry, Epidemiology and Psychiatric Sciences. Traduziu, com ensaio e notas, os livros de L S Vygotsky (1896-1934) — História das Funções Psíquicas Superiores (Lisboa: Relógio d’Agua, 2021) e Imaginação e Criatividade na Infância (Dinalivro 2012; Martins Fontes 2014). <br>
                        Atualmente desenvolve o projeto de investigação: «A Arte da Infância não é a Infância da Arte: Coleção de Desenhos de Crianças Portuguesas», centrado na atividade do Professor Doutor Vítor Fontes (1893-1979), diretor do Instituto de Anatomia da Faculdade de Medicina da Universidade de Lisboa, organizador e diretor do Instituto António Aurélio da Costa Ferreira (IAACF-1940-1989) e percursor em Portugal da Psiquiatria da Criança e do Adolescente.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
