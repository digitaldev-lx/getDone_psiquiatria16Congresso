@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" style="height: 13em;" src="{{asset("images/comissoes/cientifica/nunosousa.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top: 50vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Nuno Sousa</h2>
                    <h4>PORTUGAL</h4>
                    <p><br>
                        Nuno Sousa (nascido em 1968) é Professor Catedrático na Escola de Medicina da Universidade do Minho. É Professor visitante na Upstate Medical University, NY, USA.<br>
                        Médico, Neuro-Radiologista. É Diretor do Centro Clínico Académico - Braga (2CA) no Hospital de Braga e do Centro de Medicina Digital P5. É investigador no Domínio de Investigação em Neurociências no Instituto de Ciências da Vida e da Saúde (ICVS) da Universidade do Minho.<br>
                        Publicou mais de uma 500 de artigos em revistas internacionais, tendo um factor H de 74 com mais de 20000 citações. Supervisionou dezenas de alunos de Doutoramento e Mestrado.Recebeu vários prémios pelas suas atividades de investigação e prestação de cuidados de saúde, incluindo o Prémio Janssen Neurociências e a Medalha de Ouro do Ministério da Saúde em 2011. É membro de várias comissões de saúde e de investigação nacionais e internacionais.<br>
                        É Editor-Chefe da revista Frontiers in Behavioral Neuroscience. Membro do Board editorial das seguintes revistas: Molecular Neurodegeneration, Neurobiology of Stress e Neuropharmacology.<br>
                        Foi, entre 2017-2022 Presidente da Escola de Medicina da Universidade do Minho, entre 2011-2015, Presidente da Sociedade Portuguesa de Neurociências e entre 2014-2016 Presidente do Conselho Científico das Ciências da Vida e da Saúde da Fundação da Ciência e Tecnologia.<br>
                        É membro do Conselho Executivo da Fundação Bial.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
