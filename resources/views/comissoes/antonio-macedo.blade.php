@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/comissoes/cientifica/antoniomacedo.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top: 40vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">António Ferreira de Macedo</h2>
                    <h4>PORTUGAL</h4>
                    <p>EDUCATION<br>
                        Professor Catedrático de Psiquiatria/Psicologia Médica da Faculdade de Medicina da Universidade de Coimbra (FMUC) e Professor Afiliado da Faculdade de Medicina da Universidade do Porto (FMUP) e da Faculdade de Medicina de Barbacena (Brasil)<br>
                        Diretor do Instituto de Psicologia Médica da FMUC e responsável pelo ensino/regência de diversas unidades curriculares ligadas à psiquiatria/psicologia médica e Neurociências, no ensino pré e pós graduado, na FMUC e nas instituições em que é Professor Afiliado.<br>
                        Assistente Graduado de Psiquiatria do Centro Hospitalar e Universitário de Coimbra (CHUC) e Coordenador da Unidade de Internamento Masculino do Centro de Responsabilidade Integrada de Psiquiatria do CHUC<br>
                        Coordenador da Unidade de Neuromodulação e da Consulta de Perturbação Obsessivo Compulsiva. As suas principais áreas clínicas de interesse e investigação são psicose, doença bipolar e perturbação obsessivo-compulsiva, bem como investigação neurobiológica da doença mental (biomarcadores).<br>
                        É investigador principal em diversos projetos financiados na área da neurobiologia das doenças mentais e de Medicina Clínica com ênfase em Psiquiatria.<br>
                        Autor/co-autor de mais de 3 centenas de publicações com peer-review, nas principais revistas internacionais da área da psiquiatria/psicologia. Autor/coordenador de várias dezenas de capítulos de livros/ livros nacionais e internacionais.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
