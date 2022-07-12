@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/convidados/Brendan_Kelly.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo_cinza.png")}}" style="width: 150px; float: left; margin-top: 60vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Brendan Kelly</h2>
                    <h4>GERMANY</h4>
                    <p><br>
                        Brendan Kelly is Professor of Psychiatry at Trinity College Dublin, Ireland, Consultant Psychiatrist at Tallaght University Hospital, Dublin, and UCD Visiting Full Clinical Professor at UCD School of Medicine, University College Dublin.<br>

                        In addition to his medical degree (MB BCh BAO), he holds masters degrees in epidemiology (MSc), healthcare management (MA) and Buddhist studies (MA); and doctorates in medicine (MD), history (PhD), governance (DGov) and law (PhD).<br>

                        He has authored and co-authored over 300 publications in peer-reviewed journals, over 600 non-peer-reviewed publications, 21 book chapters and book contributions, and 17 books (11 as sole author).<br>

                        He is a Fellow of the Royal College of Psychiatrists, the Royal College of Physicians of Ireland, and Trinity College Dublin. Since 2017, he is Editor-in-Chief of the International Journal of Law and Psychiatry.<br>

                        His recent books include ‘The Science of Happiness: The Six Principles of a Happy Life and the Seven Strategies for Achieving It’ (2021) and ‘In Search of Madness: A Psychiatrist’s Travels Through the History of Mental Illness’ (2022).</p>
                </div>
            </div>
        </div>
    </div>

@endsection
