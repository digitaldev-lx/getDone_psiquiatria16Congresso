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
                        <img class="doctor-img-individual" src="{{asset("images/convidados/DANIEL_FREEMAN.jpg")}}"/>
                    </div>
                    <img src="{{asset("images/sppsm_logo_cinza.png")}}" style="width: 150px; float: left; margin-top: 60vh" alt="sppsm" class="sppsm-logo-comissoes"/>
                </div>

                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Daniel Freeman</h2>
                    <h4>GERMANY</h4>
                    <p><br>
                        Daniel Freeman is a Professor of Clinical Psychology and NIHR Senior Investigator at the University of Oxford and a consultant clinical psychologist in Oxford Health NHS Foundation Trust. <br>
                        Professor Freeman’s research has focussed on using psychological theory to develop more powerful psychological treatments. He has also been pioneering the development of automated virtual reality treatments for mental health conditions. <br>
                        He founded Oxford VR, a University of Oxford spin-out company. He has published over 300 papers and 10 books. He is the recipient of the 2020 British Psychological Society Presidents' Award for Distinguished Contributions to Psychological Knowledge, and presented the BBC Radio 4 series ‘A History of Delusions’.</p>
                </div>
            </div>
        </div>
    </div>

@endsection