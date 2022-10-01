@extends("layout.index")

@section("content")
    <section id="call-for-abstracts">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados"
             alt="Sociedade Portuguesa de Psiquiatria"/>

        <div class="container">
            <img src="{{asset("images/LOGO_AC.svg")}}" class="presidencia-pages"/>

            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-1">
                    <h2 class="fh5co-section-convidados">Call for Abstracts</h2>
                    <hr class="underline-title-bv" style="margin-left: 32px">
                </div>
                <div class="hidden-xs col-xs-12 col-md-2">
                    <img src="{{asset("images/sppsm_logo_cinza.png")}}"
                         style="width: 100px; float: right; margin: 120px -120px 0 0" alt="sppsm" class="sppsm-logo-comissoes"/>
                </div>
            </div>

            <div class="row">
                <div class="hidden-xs col-md-1">
                    <img src="{{asset("images/side-banner.png")}}"
                         class="side-banner-abstracts hidden-xs hidden-sm hidden-md"
                         alt="Sociedade Portuguesa de Psiquiatria"/>
                </div>

                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-11 col-md-offset-1" style="text-align: left">
                    <h2 class="abstracts-title">Deadline para submissão de trabalhos: <span>17 de outubro de 2022</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-11 col-md-offset-1">

                    <h3 class="info-text" style="font-family: jost-medium">Guidelines para submissão de Abstrats:</h3>
                    <h3 class="info-text">
                        <ul style="margin-top: 10px; line-height: 20px" class="ul-info">
                            <li>
                                Os abstracts poderão ser submetidos sob a forma de poster, comunicação oral ou caso clínico (apresentado sob a forma de poster), contudo, poderá a Comissão de Avaliação de trabalhos decidir alterar a forma de apresentação em que o trabalho foi proposto/submetido.
                            </li>
                            <li>
                                Deverá ser escolhido um título para o trabalho que identifique com clareza o seu conteúdo.
                            </li>
                            <li>
                                Evite abreviaturas no título. As abreviaturas apenas poderão ser utilizadas no texto, após uma utilização da palavra por extenso.
                            </li>
                            <li>
                                O nome dos autores e o local de trabalho deverão ser preenchidos nos locais indicados. No entanto, habilitações literárias, títulos académicos, morada e formas de reconhecimento adicionais deverão ser omitidos.
                            </li>
                            <li>
                                Não serão aceites solicitações de inclusões de autores/co-autores após submissão de trabalhos.
                            </li>
                            <li>
                                A submissão do abstract deverá ser completa, incluindo escolha do tópico (conforme lista mencionada abaixo).
                            </li>
                            <li>
                                Os resumos deverão seguir obrigatoriamente a seguinte estrutura: Objetivos; Metodologia; Resultados e Discussão/Conclusões.
                            </li>
                            <li>
                                Na submissão dos resumos, o título do trabalho poderá conter no máximo até 20 palavras e o resumo será limitado a um máximo de 300 palavras.
                            </li>
                            <li>
                                Por favor assegure-se de que no seu abstract não existem erros científicos, de escrita ou gramática uma vez que serão avaliados exatamente como estão submetidos.
                            </li>
                            <li>
                                Para avaliação do trabalho, é imprescindível que o primeiro autor esteja inscrito na Reunião.
                            </li>
                            <li>
                                Não serão aceites resumos que não estejam de acordo com as regras estabelecidas.
                            </li>
                            <li>
                                Todos os trabalhos aprovados para poster serão apresentados no congresso sob formato eletrónico (normas a informar após avaliação).
                            </li>
                            <li>
                                Aos trabalhos submetidos para poster, será atribuído o Prémio do melhor poster de investigação e o Prémio do melhor poster de caso clínico.
                            </li>
                        </ul>
                    </h3>
                    <div class="col-xs-12 col-md-12 slider-container-button-i" style="margin: unset!important;">
                        <a data-toggle="modal" data-target="#submit-abstract" class="btn btn-primary" style="float:left;background: #237088; margin-left: -25px;border-radius: unset!important;box-shadow: unset!important;">SUBMETER ABSTRACT <i class="fa-solid fa-angle-right fa-xl"></i></a>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="submit-abstract" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content modal-style">
                    <div class="modal-header bg-primary modal-title-abstract">
                        COMO OBTER OS SEUS DADOS DE REGISTO PARA SUBMISSÃO DE ABSTRACT
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fa-solid fa-times fa-lg"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="container" style="padding-left: 50px">
                            <div class="row">
                                <div class="col-xs-12 modal-text-abstract">
                                    Deverá aceder ao menu <i>Novo Registo</i> e preencha todos os dados requeridos. Após submeter o pedido de registo, deverá receber um email com os seus dados para acesso à plataforma de abstracts. Caso não recepcione o e-mail com os dados, num prazo máximo de 24h, deverá por favor contactar o secretariado do Congresso (GetDone events – <span style="font-family: jost-medium">meetings@getdone.pt</span>).
                                    <br><br>
                                     Não esquecer!
                                    <br><br>
                                     Ao submeter o seu resumo por favor confirme que todos os dados foram devidamente e corretamente preenchidos.<br><br>
                                     O autor e co-autores do trabalho, deverão ser colocados no espaço destinado para o efeito. Não serão tidos em consideração os autores e co-autores inseridos no próprio resumo do trabalho.<br><br>
                                     O Resumo poderá ser submetido em formato de “rascunho”, o que permitirá ao autor efectuar alterações sempre que necessário e até ao ultimo dia válido para submissão de absracts.<br><br>
                                     Caso o resumo seja guardado como “versão final”, não será possível, após a escolha desta opção, efectuar qualquer alteração ao trabalho.<br><br>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a href="https://eventbase.pt/EventBase/Login/LoginGetDone.aspx" class="btn btn-primary">AVANÇAR PARA SUMBMISSÃO</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
