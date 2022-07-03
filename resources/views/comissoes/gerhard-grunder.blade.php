@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/convidados/GERHARD_GRUNDER.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top:35vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Gerhard Gründer</h2>
                    <h4>GERMANY</h4>
                    <p>Gerhard Gründer, psychiatrist and psychotherapist, is a Professor at the Medical Faculty Mannheim
                    at Heidelberg University. He heads the Department for Molecular Neuroimaging at the
                    Central Institute for Mental Health in Mannheim. <br>
                        His main research interests include the neurobiology
                    of mental disorders as well as molecular and clinical psychopharmacology. He uses
                    functional imaging methods, in particular positron emission tomography (PET). His most recent
                    interest is the clinical evaluation of psychedelic drugs in severe mental disorders, and he leads
                    the largest academic-initiated clinical trial with a psychedelic (in treatment-resistant depression)
                    ever done, the EPIsoDE trial. He recently discussed his thoughts on the ethics and philosophy
                    of psychiatry and their contribution to the further development of society in a book (German:
                    “Wie wollen wir leben?” Springer-Verlag 2020; English translation: “How do we want to live?”,
                    Springer-Verlag 2021). Gerhard Gründer is author of more than 230 publications in international
                    peer-reviewed journals and author and editor of more than a dozen books.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
