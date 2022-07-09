@extends("layout.index")

@section("content")

    <section id="inscricoes">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados"
             alt="Sociedade Portuguesa de Psiquiatria"/>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-1">
                    <h2 class="fh5co-section-convidados">Inscrições</h2>
                    <hr class="underline-title-bv" style="margin-left: 32px">
                </div>
                <div class="hidden-xs col-xs-12 col-md-2">
                    <img src="{{asset("images/sppsm_logo.png")}}"
                         style="width: 100px; float: right; margin: 120px -120px 0 0" alt="sppsm" class="sppsm-logo-comissoes"/>
                </div>
            </div>

            <div class="row">
                <div class="hidden-xs col-md-1">
                    <img src="{{asset("images/side-banner.png")}}"
                         class="side-banner-comissoes hidden-xs hidden-sm hidden-md"
                         alt="Sociedade Portuguesa de Psiquiatria"/>
                </div>

                <div class="col-xs-12 col-md-10 col-md-offset-1" style="margin-top: 25px;">

                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <table class="tabela">
                                <thead>
                                <tr>
                                    <td colspan="2" class="tabela-cell-title">VALOR DE INSCRIÇÕES ATÉ 8 DE JULHO</td>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="tabela-cell tabela-cell-70">Sócios da SPPSM (c/ cotas ativas)</td>
                                        <td class="tabela-cell tabela-cell-30">250,00€</td>
                                    </tr>
                                    <tr>
                                        <td class="tabela-cell tabela-cell-70">Não Sócios da SPPSM</td>
                                        <td class="tabela-cell tabela-cell-30">300,00€</td>
                                    </tr>
                                    <tr>
                                        <td class="tabela-cell tabela-cell-70">Internos</td>
                                        <td class="tabela-cell tabela-cell-30">150,00€</td>
                                    </tr>
                                    <tr>
                                        <td class="tabela-cell tabela-cell-70">Alunos</td>
                                        <td class="tabela-cell tabela-cell-30">100,00€</td>
                                    </tr>
                                    <tr>
                                        <td class="tabela-cell tabela-cell-70">Outros profissionais de saúde</td>
                                        <td class="tabela-cell tabela-cell-30">150,00€</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row" style="margin-top: 95px;">
                <div class="hidden-xs col-md-1">

                </div>

                <div class="col-xs-12 col-md-10 col-md-offset-1">

                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <table class="tabela">
                                <thead>
                                <tr>
                                    <td colspan="2" class="tabela-cell-title">VALOR DE INSCRIÇÕES APÓS 8 DE JULHO</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="tabela-cell tabela-cell-70">Sócios da SPPSM (c/ cotas ativas)</td>
                                    <td class="tabela-cell tabela-cell-30">300,00€</td>
                                </tr>
                                <tr>
                                    <td class="tabela-cell tabela-cell-70">Não Sócios da SPPSM</td>
                                    <td class="tabela-cell tabela-cell-30">350,00€</td>
                                </tr>
                                <tr>
                                    <td class="tabela-cell tabela-cell-70">Internos</td>
                                    <td class="tabela-cell tabela-cell-30">200,00€</td>
                                </tr>
                                <tr>
                                    <td class="tabela-cell tabela-cell-70">Alunos</td>
                                    <td class="tabela-cell tabela-cell-30">150,00€</td>
                                </tr>
                                <tr>
                                    <td class="tabela-cell tabela-cell-70">Outros profissionais de saúde</td>
                                    <td class="tabela-cell tabela-cell-30">200,00€</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row" style="margin-top: 45px;">
                <div class="hidden-xs col-md-1">
                </div>

                <div class="col-xs-12 col-md-10 col-md-offset-1">

                    <div class="row">
                        <div class="col-xs-12 col-md-12 slider-container-button" style="margin: unset!important;">
                            <a href="https://www.eventbase.pt/EventBase/Inscricoes/PaginaInscricaoIndividual.aspx?Params=RXZlbnRvSUQ9NjUy" class="btn btn-primary" style="background: #237088ff">EFECTUAR INSCRIÇÃO <i class="fa-solid fa-angle-right fa-xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 45px;">
                <div class="hidden-xs col-md-1">

                </div>

                <div class="col-xs-12 col-md-10 col-md-offset-1">

                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <h3 class="inscricoes-sub-lead-title">Notas:</h3>
                            <h3 class="inscricoes-sub-lead">
                                A inscrição inclui:
                                <ul>
                                    <li>Documentação de apoio à reunião; </li>
                                    <li>Acesso às sessões científicas;</li>
                                    <li>Almoços de trabalho;</li>
                                    <li>Certificado de participação.</li>
                                </ul>
                            </h3>
                            <h3 class="inscricoes-sub-lead-title">Pagamentos</h3>
                            <h3 class="inscricoes-sub-lead">
                                Todos os pagamentos deverão ser efectuados por transferência bancária para a conta:
                            </h3>
                            <h3 class="inscricoes-sub-lead-title">
                                Bankinter<br>
                                IBAN: PT50 0269 0104 00200066726 82 <br>
                                SWIFT: BKBKPTPL<br>
                                GETDONE, LDA<br>
                            </h3>
                            <h3 class="inscricoes-sub-lead-title">Notas:</h3>
                            <h3 class="inscricoes-sub-lead">
                                O comprovativo do pagamento deverá ser enviado por email para o Secretariado do Congresso, <b>meetings@getdone.pt</b>, <br>
                                mencionando sempre o nome do inscrito.<br>
                                Por favor notar que todos os comprovativos sem indicação do nome do inscrito não serão considerados.<br>
                                Todas as taxas bancárias inerentes desta transação, serão imputadas ao participante.<br>
                                A inscrição apenas será considerada como definitiva após recepção do comprovativo de pagamento.<br>
                                Caso o envio dos comprovativos não se verifiquem até 48 horas após a submissão da inscrição, a mesma será cancelada sem aviso prévio.<br>
                            </h3>
                            <h3 class="inscricoes-sub-lead-title">ALOJAMENTO:</h3>
                            <h3 class="inscricoes-sub-lead">
                                Para reservas nos hotéis do Congressos , por favor contactar o secretariado, através do e-mail <b>meetings@getdone.pt</b>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
