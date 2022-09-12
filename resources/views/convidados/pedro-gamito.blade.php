@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/convidados/pedrogamito.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo_cinza.png")}}" style="width: 150px; float: left; margin-top: 50vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Pedro Gamito</h2>
                    <h4>GERMANY</h4>
                    <p><br>
                        Pedro Gamito earned his PhD from the University of Salford (UK) in Built and Human Environment in 2002, and the title of Aggregate in Rehabilitation by the University of Lisbon in 2012. <br>
                        Pedro is a Full Professor and the Head of Programme of the Erasmus Mundus Joint Master Degree CYBER: Cyberspace, Behaviour and e-Therapy and the director of the Research Centre - HEI-Lab – Digital Human-Environment Interaction Lab, at Lusófona University. <br>
                        Since 2004 he has been developing, validating, and applying numerous virtual reality applications designed for the treatment of anxiety disorders and for the cognitive stimulation of patients with stroke, TBI and Substance Use Disorders. <br>
                        His apps are being use daily in the two largest Portuguese psychiatric and rehab hospitals. He has participated in several projects in the field of eHealth and contributes to the most relevant professional associations within his line of work. <br>
                        In 2018, he was awarded with the Lifetime Achievement Award of the International Association of CyberPsychology, Training & Rehabilitation. </p>
                </div>
            </div>
        </div>
    </div>

@endsection
