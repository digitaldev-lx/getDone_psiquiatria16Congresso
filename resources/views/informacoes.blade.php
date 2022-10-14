@extends("layout.index")

@section("content")
    <section id="programa">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados"
             alt="Sociedade Portuguesa de Psiquiatria"/>

        <div class="container">
            <img src="{{asset("images/LOGO_AC.svg")}}" class="presidencia-pages"/>

            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-9 col-md-offset-1">
                    <h2 class="fh5co-section-convidados">Informações</h2>
                    <hr class="underline-title-bv" style="margin-left: 32px">
                </div>
                <div class="hidden-xs col-sm-1 col-md-1" >
                    <img src="{{asset("images/sppsm_logo_cinza.png")}}"
                         style="width: 100px; float: right; margin: 120px -120px 0 0" alt="sppsm" class="sppsm-logo-comissoes"/>
                </div>
            </div>


            <div class="row" style="margin-top: 45px;">
                <div class="hidden-xs col-md-1">
                    <img src="{{asset("images/side-banner.png")}}"
                         class="side-banner-info hidden-xs hidden-sm hidden-md"
                         alt="Sociedade Portuguesa de Psiquiatria"/>
                </div>


                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-11 col-md-offset-1">
                    <div class="row">
                        <div class="col-xs-12 col-md-12" style="margin-left: 20px">
                            <h3 class="info-titles">ORGANIZAÇÃO / ORGANIZATION</h3>
                            <img src="{{asset("images/sppsm_logo_cinza.png")}}" style="width: 80px"/>
                            <h3 class="info-text">
                                Ana Fernandes<br>
                                Email: sppsm.secretariado@gmail.com
                            </h3>
                            
                            <h3 class="info-titles">AGÊNCIA OFICIAL / PCO:</h3>
                            <img src="{{asset("images/getdone_dark.png")}}" style="width: 110px"/>
                            <h3 class="info-text">
                                Rua Mariana Vilar n.o 3 B | 1600-220 Lisboa <br>
                                Telefone: +351 21 752 54 19<br>
                                Email: meetings@getdone.pt
                            </h3>

                            <h3 class="info-titles" style="margin-top: 30px">LOCAL DO CONGRESSO:</h3>
                            <h3 class="info-text">
                                PALÁCIO DE CONGRESSOS DO ALGARVE <br>
                                Herdade dos Salgados<br>
                                Telf.: 289 244 200
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxs-12 col-md-12" style="margin-left: 20px">
                            <h3 class="info-titles" style="margin-top: 50px">COMO CHEGAR</h3>
                            <h3 class="info-titles" style="margin-top: 40px">Vindo do Porto</h3>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3170198.853873642!2d-10.656231524182186!3d39.10880784146251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0xd2465abc4e153c1%3A0xa648d95640b114bc!2sPorto!3m2!1d41.1579438!2d-8.629105299999999!4m5!1s0xd1ad1f79c7ce5d5%3A0x96020206e9bf67cd!2sPal%C3%A1cio%20de%20Congressos%20do%20Algarve%2C%20Travessa%20do%20Golfe%2C%20Albufeira!3m2!1d37.09318!2d-8.321021!5e0!3m2!1spt-PT!2spt!4v1657408119281!5m2!1spt-PT!2spt" style="border:0;width: 70%; height: 300px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <h3 class="info-titles">Vindo de Coimbra</h3>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3191571.260965413!2d-10.656260003687224!3d38.63119929687926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0xd22f9144aacd16d%3A0x634564477b42a6b9!2sCoimbra!3m2!1d40.2033145!2d-8.4102573!4m5!1s0xd1ad1f79c7ce5d5%3A0x96020206e9bf67cd!2sPal%C3%A1cio%20de%20Congressos%20do%20Algarve%2C%20Travessa%20do%20Golfe%2C%20Albufeira!3m2!1d37.09318!2d-8.321021!5e0!3m2!1spt-PT!2spt!4v1657408344954!5m2!1spt-PT!2spt" style="border:0;width: 70%; height: 300px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <h3 class="info-titles">Vindo de Lisboa</h3>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1611774.9063949734!2d-9.788996962518848!3d37.907112619135766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0xd19331a61e4f33b%3A0x400ebbde49036d0!2sLisboa!3m2!1d38.722252399999995!2d-9.1393366!4m5!1s0xd1ad1f79c7ce5d5%3A0x96020206e9bf67cd!2sPal%C3%A1cio%20de%20Congressos%20do%20Algarve%2C%20Travessa%20do%20Golfe%2C%20Albufeira!3m2!1d37.09318!2d-8.321021!5e0!3m2!1spt-PT!2spt!4v1657408388773!5m2!1spt-PT!2spt" style="border:0;width: 70%; height: 300px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <br><br><br>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
