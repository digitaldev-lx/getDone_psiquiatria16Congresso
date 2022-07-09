@extends("layout.index")

@section("content")
    <section id="call-for-abstracts">
        <img src="{{asset("images/img-top-convidados.png")}}" class="img-top-convidados"
             alt="Sociedade Portuguesa de Psiquiatria"/>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-1">
                    <h2 class="fh5co-section-convidados">Call for Abstracts</h2>
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

                <div class="col-xs-12 col-md-9 col-md-offset-1" style="text-align: left">
                    <h2 class="abstracts-title">Dead-line para submissão de trabalhos: <span>30 de setembro de 2022</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <h3 class="inscricoes-sub-lead-title">Guidelines para submissão de Abstrats:</h3>
                    <h3 class="inscricoes-sub-lead">
                        <ul>
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
                            <li>Na submissão dos resumos, o título do trabalho poderá conter no máximo até 20 palavras e o resumo será limitado a um máximo de 300 palavras.</li>
                            <li>
                                Por favor assegure-se de que no seu abstract não existem erros científicos, de escrita ou gramática uma vez que serão avaliados exatamente como estão submetidos.
                            </li>
                            <li>
                                Para avaliação do trabalho, é imprescindível que o autor dos trabalhos esteja inscrito na Reunião.
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
                    <div class="col-xs-12 col-md-12 slider-container-button" style="margin: unset!important;">
                        <a href="https://eventbase.pt/EventBase/Login/LoginGetDone.aspx" class="btn btn-primary" style="background: #237088ff">SUBMETER ABSTRACT <i class="fa-solid fa-angle-right fa-xl"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
