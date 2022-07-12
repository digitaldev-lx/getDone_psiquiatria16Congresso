@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/convidados/MADS_HENRIKSEN.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo_cinza.png")}}" style="width: 150px; float: left; margin-top:62vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Mads Gram Henriksen</h2>
                    <h4>DENMARK</h4>
                    <p>Mads Gram Henriksen, PhD, is Associate Professor of Philosophy of Psychiatry at the Center for Subjectivity Research, Department of Communication, University of Copenhagen, and Senior Researcher at Mental Health Center Amager, University Hospital of Copenhagen. <br>
                        He has published 41 journal articles, 2 edited books, and 16 book chapters. His work takes place in the interface between clinical psychopathology and phenomenology and with an emphasis on schizophrenia spectrum disorders, self-disorders, and psychosis. 
                        <br><br>
                        Recent publications include :<br><br>
                    <ul>
                        <li>Nielsen, K.M., Nordgaard, J. Henriksen, M.G. (2022). Delusional perception revisited. Psychopathology 54: 253–261.</li>
                        <li>Henriksen, M.G., Raballo, A., Nordgaard, J. (2021). Self-disorders and psychopathology: A systematic review. The Lancet Psychiatry 8(11): 1001-1012.</li>
                        <li>Feyaerts, J., Henriksen, M.G., Vanheule, S., Myin-Germeys, I., Sass, L.A. (2021). Delusions beyond beliefs: A critical overview of diagnostic, etiological and therapeutic schizophrenia research from a clinical-phenomenological perspective. The Lancet Psychiatry 8(3): 237-249.</li>
                        <li>Henriksen, M.G., Englander, M., Nordgaard, J. (2022). Methods of data collection in psychopathology: the role of semi-structured, phenomenological interviews. Phenomenology and the Cognitive Sciences 21: 9-30.</li>
                        <li>alice, A., Henriksen, M.G. (2021). Disturbances of shared intentionality in schizophrenia and autism. Frontiers in Psychiatry 11: 570597.</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
