@extends("layout.index")

@section("content")
    <div id="fh5co-products"  style="margin-top: 80px">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8">
                    <h2 class="fh5co-section-lead">Boas-vindas</h2>
                    <h3 class="fh5co-section-sub-lead">Caros Colegas
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

                </div>
                <div class="col-md-4">
                    <img class="doctor-img" src="{{asset("images/doctor.png")}}"/>
                </div>
                <div class="fh5co-spacer fh5co-spacer-md"></div>
            </div>
        </div>
    </div>

{{--    <div class="fh5co-spacer fh5co-spacer-lg"></div>--}}
    <!-- Comissões -->
    <div class="container" id="fh5co-products">
        <div class="row text-left">
            <div class="col-md-8">
                <h2 class="fh5co-section-lead">Comissões</h2>
            </div>
            <div class="fh5co-spacer fh5co-spacer-md"></div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
                <h2 class="fh5co-section-lead-cm">Comissão Organizadora</h2>
                <h4>Lorem ipsum dolor sit amet</h4>
                <h4>Lorem ipsum dolor sit amet</h4>
                <h4>Lorem ipsum dolor sit amet</h4>
                <h4>Lorem ipsum dolor sit amet</h4>
                <h4>Lorem ipsum dolor sit amet</h4>
                <h4>Lorem ipsum dolor sit amet</h4>
                <h4>Lorem ipsum dolor sit amet</h4>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
                <h2 class="fh5co-section-lead-cm">Comissão Científica</h2>
                <h4>Lorem ipsum dolor sit amet</h4>
                <h4>Lorem ipsum dolor sit amet</h4>
                <h4>Lorem ipsum dolor sit amet</h4>
                <h4>Lorem ipsum dolor sit amet</h4>
                <h4>Lorem ipsum dolor sit amet</h4>
                <h4>Lorem ipsum dolor sit amet</h4>
                <h4>Lorem ipsum dolor sit amet</h4>
            </div>

        </div>
    </div>

    <div class="separador"></div>

    <div class="fh5co-spacer fh5co-spacer-lg"></div>
    <!-- Products -->
    <div class="container" id="fh5co-features">
        <div class="row text-left">
            <div class="col-md-8">
                <h2 class="fh5co-section-lead">Sponsors</h2>
                <h3 class="fh5co-section-sub-lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</h3>
            </div>
            <div class="fh5co-spacer fh5co-spacer-md"></div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
                <div class="fh5co-product">
                    <img src="images/slide_1.jpg" alt="codeboys.pt Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
                    <h4>Lorem ipsum</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
                <div class="fh5co-product">
                    <img src="images/slide_2.jpg" alt="codeboys.pt Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
                    <h4>Architecto nihil</h4>
                </div>
            </div>
            <div class="visible-sm-block visible-xs-block clearfix"></div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
                <div class="fh5co-product">
                    <img src="images/slide_3.jpg" alt="codeboys.pt Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
                    <h4>Animi earum</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
                <div class="fh5co-product">
                    <img src="images/slide_4.jpg" alt="codeboys.pt Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
                    <h4>Recusandae iste</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
                <div class="fh5co-product">
                    <img src="images/slide_1.jpg" alt="codeboys.pt Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
                    <h4>Lorem ipsum</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
                <div class="fh5co-product">
                    <img src="images/slide_2.jpg" alt="codeboys.pt Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
                    <h4>Architecto nihil</h4>
                </div>
            </div>
            <div class="visible-sm-block visible-xs-block clearfix"></div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
                <div class="fh5co-product">
                    <img src="images/slide_3.jpg" alt="codeboys.pt Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
                    <h4>Animi earum</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
                <div class="fh5co-product">
                    <img src="images/slide_4.jpg" alt="codeboys.pt Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
                    <h4>Recusandae iste</h4>
                </div>
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
