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
                            <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/pessoas/".$pessoa[2])}}"/>
                    </div>
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top: 90vh" alt="sppsm" class="sppsm-logo-comissoes"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">{{$pessoa[0]}}</h2>
                    <h4>{{$pessoa[1]}}</h4>
                    <p>{!! $pessoa[4] !!}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
