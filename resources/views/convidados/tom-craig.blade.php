@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/convidados/TOM_CRAIG.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo_cinza.png")}}" style="width: 150px; float: left; margin-top:35vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Tom K J Craig</h2>
                    <h4>USA</h4>
                    <p>Tom K J Craig MD PhD FRCPsych: Emeritus Professor of Social Psychiatry at the Institute of Psychiatry, Psychology and Neuroscience, King’s College, London, Consultant psychiatrist, South London and Maudsley Hospital and. Past President World Association of Social Psychiatry.<br>

                        Tom qualified in medicine at the University of the West Indies and trained in psychiatry in Nottingham UK. He was appointed to Kings College London as the first UK Professor of Community Psychiatry in 1990 and worked clinically in South London. <br>
                        His clinical research focuses on developing and evaluating community-based psychiatric services and the promotion of these solutions at a National and International level. <br>
                        These programmes have included residential alternatives to the hospital asylum, specialised services for homeless mentally ill people, supported employment, services for first episode psychosis and studies of the computer-based AVATAR programme for the treatment of auditory hallucinations.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
