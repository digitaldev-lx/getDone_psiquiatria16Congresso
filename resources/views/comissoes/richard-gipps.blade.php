@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/convidados/RICHARD_GIPPS.jpeg")}}"/>
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top:35vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Richard Gipps</h2>
                    <h4>USA</h4>
                    <p>Dr Richard Gipps is a philosopher and clinical psychologist with a private psychotherapy practice in Oxford, UK. He is the author of “On Madness: Understanding the Psychotic Mind”, to be published by Bloomsbury in October 2022. <br>
                        He is also a co-editor of the "Oxford Handbook of Philosophy and Psychoanalysis" and the "Oxford Handbook of Philosophy and Psychiatry". <br>
                        More recently his attention has turned to understanding what it is: to be lonely, to consider oneself loveable, to live with dignity, and to deploy the virtues as regulative ideals for a mentally healthy life.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
