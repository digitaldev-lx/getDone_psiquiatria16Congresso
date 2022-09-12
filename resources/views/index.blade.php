@extends("layout.index")

@section("content")
    <div id="fh5co-products" style="margin-top: 100px">
        <img src="{{asset("images/side-banner.png")}}" class="side-banner hidden-xs hidden-sm hidden-md" alt="Sociedade Portuguesa de Psiquiatria"/>
        <div class="container" style="display: inline-block;">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-7 col-md-offset-1 bv-aligment">
                    <h2 class="fh5co-section-lead">Boas-vindas</h2>
                    <hr class="underline-title-bv">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 hidden-xs hidden-md " style="margin-top: -95px; padding-left: 120px">
                    <h2 class="logo-title">XVI</h2>
                    <h4 class="logo-sub-title">Congresso Nacional de Psiquiatria</h4>
                    <h6 class="logo-bold-text">O Natural e o Artificial na Psiquiatria:</h6>
                    <h6 class="logo-bold-text" style="margin-top: -10px">Novelos e os seus Desenlaces</h6>
                    <h6 class="logo-normal-text">The Natural and The Artificial in Psychiatry:</h6>
                    <h6 class="logo-normal-text" style="margin-top: -10px">Knots ant their untying</h6>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12 col-lg-7 col-lg-offset-1 mb-bv-aligment">
                    <h3 class="fh5co-section-sub-lead">Caros Colegas<br>
                        É com o maior prazer que os convidamos para o XVI Congresso Nacional de Psiquiatria (CNP)
                        organizado pela Sociedade Portuguesa de Psiquiatria e Saúde Mental (SPPSM) que terá lugar de 16
                        a 19 novembro de 2022. Com o alívio das medidas de confinamento no âmbito da pandemia de
                        COVID 19, estaremos novamente juntos, desta vez no Palácio de Congressos do Algarve, Herdade
                        dos Salgados. Através da experiência adquirida nas circunstâncias excecionais que vivemos durante
                        dois anos, capitalizámos novos modos de comunicação que nos permitem um regime híbrido no
                        congresso e, deste modo, convidar palestrantes antes vedados pela sua agenda fechada ou pela
                        distância.</h3>
                    <h3 class="fh5co-section-sub-lead">Acreditamos que este CNP será o início de uma nova proximidade entre todos, maximizando
                        exploração do tema central que escolhemos – O Natural e o Artificial na Psiquiatria: Novelos e os
                        seus Desenlaces. Urge refletirmos sobre os atuais modelos de intervenção, dificuldades encontradas
                        e soluções para esta época de grandes transformações. Encontrarão connosco não só palestras em
                        áreas relevantes favorecendo aspetos translacionais na Psiquiatria e Saúde Mental, mas também um
                        lugar de partilha e discussão com a comunidade psiquiátrica. Privilegiamos a integração de
                        conhecimentos como fundamental à criação de novas ideias, num leque de intervenções
                        conjuntamente com as Secções da SPPSM, em temas partilhados com reconhecidos palestrantes
                        nacionais e internacionais.</h3>
                    <h3 class="fh5co-section-sub-lead">Contamos com a vossa presença ativa, quer participando nos simpósios e sessões plenárias quer
                        trazendo contributos sob a forma de posters e comunicações livres, para uma discussão aberta,
                        crítica e livre de constrangimentos entre os vários saberes e modelos na Psiquiatria contemporânea.<br><br>
                        Cordiais cumprimentos.</h3>
                    <img src="{{asset("images/sppsm_logo_cinza.png")}}" style="width: 90px; float: left; margin-top: 50px" alt="sppsm " class="hidden-xs hidden-sm sppsm-logo-bv"/>

                </div>
                <div class="col-md-12 col-lg-3 row dt-main-container" style="margin-left: 40px;">
                    <div class="col-md-12 doctor-img-container" style="margin-top: 20px">
                        <div class="shadow-img">
                            <img alt="Maria João Heitor" class="doctor-img" src="{{asset("images/presidentes/MJH.jpg")}}"/>
                        </div>
                        <img alt="Maria João Heitor" class="doctor_signature" src="{{asset("images/presidentes/mjh_signature.png")}}"/>
                        <h5>Maria João Heitor</h5>
                        <h6>Presidente da SPPSM</h6>
                    </div>
                    <div class="col-md-12 doctor-img-container" style="margin-top: 20px">
                        <div class="shadow-img">
                            <img alt="Luis Madeira" class="doctor-img" src="{{asset("images/presidentes/LM.jpg")}}"/>
                        </div>
                        <img alt="Luis Madeira" class="doctor_signature" src="{{asset("images/presidentes/lm_signature.png")}}"/>
                        <h5>Luís Madeira</h5>
                        <h6>Presidente da Comissão Organizadora</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cta-parallax row">
        <div class="col-12 col-md-6 cta-content">
        <span class="cta-text">
            <h1>16 - 19</h1>
            <h2>NOV 2022</h2>
            <h5>PALÁCIO DE CONGRESSOS</h5>
            <h4>DO ALGARVE</h4>
            <a style="border-radius: unset!important;box-shadow: unset!important;" href="https://www.eventbase.pt/EventBase/Inscricoes/PaginaInscricaoIndividual.aspx?Params=RXZlbnRvSUQ9NjUy" class="btn btn-primary">EFETUAR INSCRIÇÃO <i class="fa-solid fa-angle-right fa-xl"></i></a>
        </span>
        </div>
    </div>


    <!-- Products -->
    <div class="container" id="fh5co-features">
        <div class="row text-left">
            <div class="col-md-8">
                <h2 class="fh5co-section-lead" style="">Patrocinadores</h2>
                <hr class="underline-title-bv" style="">
{{--                <p class="texto">Brevemente Disponível</p>--}}
            </div>
            <div class="fh5co-spacer fh5co-spacer-xs"></div>
        </div>

        <div class="row text-left">
            <div class="col-md-8">
                <h2 class="fh5co-section-lead" style="font-family: jost-semi-bold; font-size: max(12px, 1.5vw);">PLATINA</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                <div class="patrocinador">
                    <img src="{{asset("images/sponsors/neuraxpharm.jpg")}}" alt="Jaba Recordati" class="img-responsive img-rounded to-animate" style="width: 70%">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                <div class="patrocinador">
                    <img src="{{asset("images/sponsors/jabarecordati.jpg")}}" alt="Jaba Recordati" class="img-responsive img-rounded to-animate" style="width: 70%">
                </div>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-md-8">
                <h2 class="fh5co-section-lead" style="font-family: jost-semi-bold; font-size: max(12px, 1.5vw);">PRATA</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                <div class="patrocinador">
                    <img src="{{asset("images/sponsors/angelinipharma.png")}}" alt="Angelini Pharma" class="img-responsive img-rounded to-animate">
                </div>
            </div>
            <div class="visible-sm-block visible-xs-block clearfix"></div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                <div class="patrocinador">
                    <img src="{{asset("images/sponsors/lundbeck.jpg")}}" alt="Lundbeck" class="img-responsive img-rounded to-animate">
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 ">
                <div class="patrocinador">
                    <img src="{{asset("images/sponsors/viatris.jpg")}}" alt="Viatris" class="img-responsive img-rounded to-animate">
                </div>
            </div>
            {{--<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
                <div class="patrocinador">
                    <img src="{{asset("images/neuraxpharm.png")}}" alt="Neurax Pharma" class="img-responsive img-rounded to-animate">
                </div>
            </div>--}}
        </div>
        <div class="row text-left">
            <div class="col-md-8">
                <h2 class="fh5co-section-lead" style="font-family: jost-semi-bold; font-size: max(12px, 1.5vw);">OUTROS APOIOS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 ">
                <h4>AZENTIS</h4>
                <h4>BIAL</h4>
                <h4>SOOMA</h4>
                <h4>TECNIFAR</h4>
            </div>
        </div>
    </div>
    <!-- Products -->
{{--    <div class="fh5co-spacer fh5co-spacer-lg"></div>--}}

    {{--<div id="fh5co-clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="images/client_1.png" alt="codeboys.pt Free HTML5 Bootstrap Template" class="img-responsive"></div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="images/client_2.png" alt="codeboys.pt Free HTML5 Bootstrap Template" class="img-responsive"></div>
                <div class="visible-sm-block visible-xs-block clearfix"></div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="images/client_3.png" alt="codeboys.pt Free HTML5 Bootstrap Template" class="img-responsive"></div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="images/client_4.png" alt="codeboys.pt Free HTML5 Bootstrap Template" class="img-responsive"></div>
            </div>
        </div>
    </div>

    <div class="fh5co-bg-section" style="background-image: url(images/slide_2.jpg); background-attachment: fixed;">
        <div class="fh5co-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="fh5co-hero-wrap">
                        <div class="fh5co-hero-intro text-center">
                            <h1 class="fh5co-lead"><span class="quo">&ldquo;</span>Design is not just what it looks like and feels like. Design is how it works. <span class="quo">&rdquo;</span></h1>
                            <p class="author">&mdash; <cite>Steve Jobs</cite></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection
