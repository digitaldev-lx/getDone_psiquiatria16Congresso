@extends("layout.index")

@section("content")
    <div id="section-convidados">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados" alt="Sociedade Portuguesa de Psiquiatria"/>
        {{-- <img src="{{asset("images/side-banner.png")}}" class="side-banner-convidados hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
         --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    <img alt="Amelia Fiske" class="doctor-img-individual" src="{{asset("images/convidados/LAUREL_RIEK.jpg")}}"/>
                    <img src="{{asset("images/sppsm_logo_cinza.png")}}" style="width: 150px; float: left; margin-top:35vh" alt="sppsm"/>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="fh5co-section-convidados">Laurel Riek</h2>
                    <h4>USA</h4>
                    <p>Dr. Riek is a professor of Computer Science and Engineering at UC San Diego, and holds
                        affiliate appointments in the Department of Emergency Medicine, Contextual Robotics Institute,
                        and Design Lab. Dr. Riek is a pioneer in the field of healthcare robotics, and has demonstrated
                        an ongoing record of research accomplishment in the fields of human robot
                        interaction, health informatics, and artificial intelligence. Dr. Riek directs the Healthcare
                        Robotics Lab, which engages in community-centered health technology design research to
                        develop new assistive technologies that can support people with cognitive and physical
                        disabilities, their families, and their communities. The lab also engages in signifiant research
                        efforts within in acute care environments, to create technologies that can help alleviate
                        healthcare worker burnout and improve patient experience.<br><br>
                        Dr. Riek received a Ph.D. in Computer Science from the University of Cambridge, and B.S. in
                        Logic and Computation from Carnegie Mellon. Riek served as a Senior Artificial Intelligence
                        Engineer and Roboticist at The MITRE Corporation from 2000-2008, and held the Clare Boothe
                        Luce chair in Computer Science and Engineering at the University of Notre Dame from
                        2011-2016. Dr. Riek has received the NSF CAREER Award, AFOSR Young Investigator Award,
                        Qualcomm Research Award, and several best paper awards. Dr. Riek is the HRI 2023 General
                        Co-Chair and served as the Program Co-Chair for HRI 2020, and also serves on the editorial
                        boards of T-RO and THRI.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
