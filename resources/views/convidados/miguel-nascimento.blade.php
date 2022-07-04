@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/convidados/miguelnascimento.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top: 30vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Miguel Nascimento</h2>
                    <h4>PORTUGAL</h4>
                    <p>EDUCATION<br>

                        Formado em Medicina pela Faculdade de Medicina da Universidade de Lisboa, realizou a especialidade em Psiquiatria e Saúde Mental no Centro Hospitalar Psiquiátrico de Lisboa, onde atualmente exerce, não só em consulta comunitária, como internamento de agudos. <br>
                        Adicionalmente, tem desenvolvido trabalho como da direção clínica e coordenação do Núcleo Comunitário de Torres Vedras, além de participar na ECL de Saúde Mental de Lisboa Central relativamente à Rede de Cuidados Continuados Integrados. Encontra-se a realizar doutoramento em Neurociências, focado na melhoria dos sintomas cognitivos e incapacidade funcional em utentes com doença Bipolar.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
