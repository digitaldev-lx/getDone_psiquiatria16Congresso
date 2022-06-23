@extends("layout.index")

@section("content")

    <div class="right-banner hidden-xs hidden-sm hidden-md">
        <img src="{{asset("images/right_banner.jpg")}}" />
    </div>
    <div class="separador-galeria"></div>
    <div id="fh5co-features" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-12 text-left">
                <h2 class="fh5co-section-lead text-left" style="padding-left: 25px">Local</h2>
                <h4 class="fh5co-section-lead-cm text-left" style="padding-left: 25px">Vila Galé - Évora</h4>
            </div>
        </div>
        <section>
            <div class="container gal-container">
                @php
                    $images = [
                        "1.jpg",
                        "2.jpg",
                        "3.jpg",
                        "4.jpg",
                        "5.jpg",
                        "6.jpg",
                        "7.jpg",
                        "8.jpg",
                        "9.jpg",
                        ]
                @endphp
                @foreach($images as $key => $image)
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">

                        <a href="#" data-toggle="modal" data-target="#{{$key}}">
                            <img src="{{asset("images/local/".$image)}}">
                        </a>
                        <div class="modal fade" id="{{$key}}" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                        <img src="{{asset("images/local/".$image)}}">
                                    </div>
                                    {{--<div class="col-md-12 description">
                                        <h4>This is the first one on my Gallery</h4>
                                    </div>--}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <h5 style="font-weight: bold">MORADA</h5>
                <h6>Vila Galé Évora ★ ★ ★ ★</h6>
                <h6>Avenida Túlio Espanca</h6>
                <h6>7005-840 Évora</h6>
                <h6>PORTUGAL</h6>
                <h5 style="font-weight: bold">GPS</h5>
                <h6>N 38º 34’1.576” - W 7º 54’56.395”</h6>
                <h5 style="font-weight: bold">TELEFONE</h5>
                <h6>(+351) 266 758 100</h6>
            </div>
        </div>
    </div>


@endsection
