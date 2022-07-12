@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/convidados/CHRISTOPH_CORRELL.JPG")}}"/>
                    <img src="{{asset("images/sppsm_logo_cinza.png")}}" style="width: 150px; float: left; margin-top:35vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Christoph Correll</h2>
                    <h4>USA</h4>
                    <p>Christoph U. Correll, MD is Professor of Psychiatry at the Zucker School of Medicine at Hofstra/
                        Northwell, New York, USA, and Professor and Chair, Department of Child and Adolescent
                        Psychiatry, Charité University Medicine, Berlin, Germany. He completed his medical studies at
                        the Free University of Berlin, Germany, and University of Dundee School of Medicine, Scotland.
                        He is board certified in general psychiatry and child and adolescent psychiatry, having
                        completed both residencies at Zucker Hillside Hospital, New York. Since 1997, he has been
                        working and conducting research in the USA and since 2017 also in Germany again
                        Professor Correll focusses on the identification and treatment of youth and adults with severe
                        mental illness, clinical trials, epidemiology, psychopharmacology, meta-analyses and the
                        interface between physical and mental health.<br>
                        He has authored over 750 journal articles that have been cited over 54,000 times and received
                        over 40 research awards.<br>
                        Since 2014, he has been listed annually by Clarivate/Web of Science as one of the “most
                        influential scientific minds” and “top 1% cited scientists in the area of psychiatry”.
                        He has held numerous Expertscape rankings based on number of publications and citations in
                        the past 10 years, being listed in 15 topics as “Expert” and in 24 topics as “World Expert”.
                        Since 2017, he has ranked continuously as number one world expert in 9 different areas,
                        including “central nervous agents”, “psychotropic drugs”, “schizophrenia”, “schizophreniaspectrum
                        and other psychotic disorders, “antipsychotics”, “delayed-action preparations” and
                        “weight gain”.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
