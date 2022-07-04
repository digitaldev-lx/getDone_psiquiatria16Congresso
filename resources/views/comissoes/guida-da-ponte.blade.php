@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" style="height: 13em;" src="{{asset("images/comissoes/cientifica/guidadaponte.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top: 30vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Guida da Ponte</h2>
                    <h4>PORTUGAL</h4>
                    <p>EDUCATION<br>
                        Guida da Ponte, MD, PhD Fellowship em Cuidados Paliativos – Instituto de Medicina Paliativa, Índia;<br>
                         Pós-Graduação em Medicina Social, Universidade Católica Portuguesa;<br> Vice-Presidente da Secção de Psico-Oncologia da Sociedade Portuguesa de Psiquiatria e Saúde Mental;<br> Coordenação do Grupo de Trabalho de Psicoterapia - HIV/AIDS Special Interest Group - Academy of Consultation-Liaison Psychiatry;<br>  Unidade de Psiquiatria de Ligação do Departamento de Psiquiatria e Saúde Mental do Centro Hospitalar Barreiro-Montijo, EPE;
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
