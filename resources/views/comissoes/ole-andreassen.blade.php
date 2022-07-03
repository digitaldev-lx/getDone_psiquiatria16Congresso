@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/convidados/OLE_ANDREASSEN.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo.png")}}" style="width: 150px; float: left; margin-top:35vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Ole Andreassen</h2>
                    <h4>USA</h4>
                    <p>Professor in psychiatry at the University of Oslo, Division of Mental Health and Addiction, and attending psychiatrist, Oslo University Hospital, Oslo, Norway. Andreassen did his PhD in psychopharmacology at University of Bergen and his post doc training in neuroscience at Massachusetts General Hospital-Harvard Medical School where he investigated mechanisms of neurodegeneration.
                        <br>He did his psychiatry residency at Oslo University Hospital, and is now the Director of Norwegian Centre for Mental Disease Research (NORMENT), a KG Jebsen Centre, one of the largest mental health research groups in Scandinavia.
                        <br>The centre has a translational research approach and apply clinical and neurocognitive, brain imaging phenotypes and molecular genetics tools to identify causes and underlying pathophysiology of severe mental disorders. <br>
                        Andreassen builds his research on the Nordic advantages, such as public health care system, large biobanks, health registries and homogenous population, and has recently developed a biostatistical program to improve analysis of the ever constantly increasing research data.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
