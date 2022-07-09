@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <div class="shadow-img-individual">
                        <img alt="António Reis Marques" class="doctor-img-individual" src="{{asset("images/comissoes/cientifica/antoniomarques.jpg")}}"/>
                    </div>
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top: 60vh" alt="sppsm" class="sppsm-logo-comissoes"/>
                </div>

                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">António Reis Marques</h2>
                    <h4>PORTUGAL</h4>
                    <p><br>
                        Psiquiatra desde 1979 e nos quadros dos HUC desde 1980<br>
                        Foi chefe de redação da Revista "Psiquiatria Clínica (publicação mais antiga do País na Saúde Mental ) desde a sua criação em 1981, e desde 2010 foi seu editor.<br>
                        Diretor de Serviço de Psiquiatria dos HUC desde 2009 e Diretor do C R I de Psiquiatria e Saúde Mental do CHUC desde 2012<br>
                        Presidente da Mesa Assembleia do Sector Medico dos H U C entre 1982 a 1985. No mesmo período foi membro da Comissão Mista HUC/FMC que se debruçou sobre as relações entre o CHUC e a FMC  Membro da Direção da SR Centro da Ordem dos Médicos entre 1988 a1992;<br>
                        Vice-Presidente da mesma direção de 1992 a 1998;<br>
                        Presidente da direção da SR Centro da O. Médicos e membro do CNE da Ordem Medicos entre 1998 e 2004<br>
                        Entre 1992 e 2001 pertenceu ao Comité de Ética dos Médicos Europeus<br>
                        Presidente do Colégio de  Psiquiatria  da OM desde 2021<br>
                        Medalha de Ouro da O Médicos<br>
                        Medalha de Ouro por Serviços Distintos do Ministério da saúde <br>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
