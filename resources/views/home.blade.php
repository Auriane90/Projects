<!DOCTYPE html>


<head>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Informática TI</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" href="{{ asset('onePage/img/icone.png')}}">

        <link href="{{asset('onePage/css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('onePage/css/semantic.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('onePage/css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('onePage/css/icon.min.css')}}">

        <link rel="stylesheet" href="{{asset('onePage/css/style.css')}}">

        <link href="{{asset('onePage/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('onePage/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{asset('onePage/css/ionicons.min.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('onePage/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('onePage/css/slick-theme.css')}}">


        <!-- Bootstrap core CSS -->
        <!--Importações do modelo do site-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

        <link href="http://jeffry.in/old-jeffry-in/css/jeffry.in.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Lobster|Raleway:300,500,700" rel="stylesheet">

        <link href="{{asset('onePage/css/agency.css')}}" rel="stylesheet">

        <link href="{{asset('onePage/css/transicoes.css')}}" rel="stylesheet">


    </head>
</head>

<body>

    <div class="ui container fluid" id="mobileBody">
        <!--NavBar-->
        <div class="ui inverted segment">
            <div class="ui inverted secondary pointing menu fixed">

                <div class="left menu" id="hamburguer">
                    <div class="logo"><i class="left icon content"></i></div>
                </div>
                <div class="left menu" id="logoNav">
                    <div class="logo"><img src="{{asset('onePage/img/logoNav.png')}}"></div>
                </div>
                <div class="right menu" id="logoMobile">
                    <div class="logo"><img src="{{asset('onePage/img/logos/logoMobile.png')}}"></div>
                </div>
                <div class="right menu" id="linksNav">
                    <a id="home" name="1" class="item ancora active" style="transition: 0.5s;">
            HOME
          </a>
                    <a id="aboutUs" name="2" class="item ancora">
            SOBRE NÓS
          </a>
                    <a id="ourServices" name="3" class="item ancora">
            NOSSOS SERVIÇOS
          </a>
                    <a id="results" name="4" class="item ancora">
            RESULTADOS
          </a>
                    <a id="calls" name="6" class="item ancora">
            ATENDIMENTOS
          </a>
                    <a id="fac" name="7" class="item ancora">
            FAC
          </a>
                    <a id="ourTime" name="8" class="item ancora">
            NOSSO TIME
          </a>
                </div>
            </div>

            <div class="ui sidebar inverted vertical menu" id="sideBar">
                <div class="left" id="hamburguerMobile">
                    <div class="logo"><i class="left icon content"></i></div>
                </div>
                <br><br>
                <a class="item ancora" name="1" id="closeSidebar">
          HOME
        </a>
                <a class="item ancora" name="2" id="closeSidebar">
          SOBRE NÓS
        </a>
                <a class="item ancora" name="3" id="closeSidebar">
          NOSSOS SERVIÇOS
        </a>
                <a class="item ancora" name="4" id="closeSidebar">
          RESULTADOS
        </a>
                <a class="item ancora" name="6" id="closeSidebar">
          ATENDIMENTOS
        </a>
                <a class="item ancora" name="7" id="closeSidebar">
          FAC
        </a>
                <a class="item ancora" name="8" id="closeSidebar">
          NOSSO TIME
        </a>
            </div>
            <div class="pusher">
                <!-- Site content !-->
            </div>
        </div>

        <div id="total">
            <div class="bodyPart01" id="1">
                <br><br><br>
                <p>
                </p>
                <h1>Bem vindo ao Setor de Informática</h1>
                <div class="h2Initial">
                    <h2>
                        O derpartamento de TI exige muito esforço para ser formado e é invariavelmente diferente em cada empresa. Nos baseamos na identidade do campus e no segmento em que ele atua. Alinhando nossos objetivos estratégicos com o de sua administração.</h2>
                </div>
                <p></p>
                <div class="ui massive rectangle image"><img src="{{asset('onePage/img/threeZones.png')}}"></div>
            </div><br>

            <div class="bodyPart02">
                <div id="2">
                    <div class="faixa01">
                        <div style="text-align: center;">
                            <p><a class="ui fonts">SOBRE NÓS</a></p>
                            <div class="section-header"><span class="section-divider underline1"></span></div>
                        </div>
                        <div class="aboutUs" style="width: 556px; margin: 0 auto;">
                            <h4>Somos uma equipe com talento de manter e melhorar a tecnologia da informação do IFCE campus Maracanaú
                            </h4>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 81px;">
                        <center>
                            <div class="row history">
                                <div class="col-lg-12">
                                    <ul class="timeline" id="timeline">
                                        @foreach ($linha as $l=>$valor) @if($l % 2 == 0)
                                        <li>
                                            <div class="timeline-image">
                                                <img class="rounded-circle img-fluid" src="/storage/{{$valor->image}}" style="width:100%; height: 100%;" alt="">
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4>{{$valor->periodo}}</h4>
                                                    <h4 class="subheading">{{$valor->titulo}}</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p class="text-muted">{{$valor->descricao}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        @else
                                        <li class="timeline-inverted">
                                            <div class="timeline-image">
                                                <img class="rounded-circle img-fluid" src="/storage/{{$valor->image}}" style="width:100%; height: 100%;" alt="">
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4>{{$valor->periodo}}</h4>
                                                    <h4 class="subheading">{{$valor->titulo}}</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p class="text-muted">{{$valor->descricao}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        @endif @endforeach



                                        <li class="timeline-inverted">
                                            <div class="timeline-image">
                                                <h4>Be Part
                                                    <br>Of Our
                                                    <br>Story!</h4>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <div>
                    <div class="faixa01" style="background-color: #f8f9fa !important;" id="3">
                        <div style="text-align: center; color: black;">
                            <p><a class="ui fonts">NOSSOS SERVIÇOS</a></p>
                            <div class="section-header"><span class="section-divider underline2"></span></div>
                        </div>
                        <div class="ourServices" style="width: 922px; margin: 0 auto; color: black">
                            <h4>Atuando em três áreas bem definidas, fazemos a gerência das configurações dos computadores, do desempenho da rede lógica e de desenvolvimento de softwares.</h4>
                        </div>
                    </div>

                    <div class="ui grid areasColor">
                        <div class="row centered">
                            <div class="five wide computer twelve wide mobile column center aligned"><img src="{{asset('onePage/img/describeAreas/Manutenção.png')}}"></div>
                            <div class="five wide computer twelve wide mobile column center aligned"><img src="{{asset('onePage/img/describeAreas/Configuração.png')}}"></div>
                            <div class="five wide computer twelve wide mobile column center aligned"><img src="{{asset('onePage/img/describeAreas/Rede.png')}}"></div>
                            <div class="five wide computer twelve wide mobile column center aligned"><img src="{{asset('onePage/img/describeAreas/Telefonia.png')}}"></div>
                            <div class="five wide computer twelve wide mobile column center aligned"><img src="{{asset('onePage/img/describeAreas/Catracas.png')}}"></div>
                            <div class="five wide computer twelve wide mobile column center aligned"><img src="{{asset('onePage/img/describeAreas/Vigilância.png')}}"></div>
                            <div class="five wide computer twelve wide mobile column center aligned"><img src="{{asset('onePage/img/describeAreas/Desenvolvimento.png')}}"></div>
                            <div class="five wide computer twelve wide mobile column center aligned"><img src="{{asset('onePage/img/describeAreas/Capacitação.png')}}"></div>
                        </div>
                    </div><br>

                </div>
                <div class="ui grid" id="4">
                    <div class="row">
                        <div class="eight wide computer twelve wide mobile column right aligned centerPdca"><img class="ui big image pdca" src="{{asset('onePage/img/resultImages/pdca.png')}}"></div>
                        <div class="eight wide computer twelve wide mobile column left aligned centerPdca">
                            <div class="someResults" style="text-align: center;">
                                <p><a class="ui fonts">ALGUNS RESULTADOS</a></p>
                                <div class="section-header"><span class="section-divider underline3"></span></div>
                            </div>
                            <div class="ui grid reformGrid">
                                <div class="row alinhamento">
                                    <div class="eight wide column"><img class="ui tiny image centralize" src="{{asset('onePage/img/resultImages/nac.png')}}">
                                        <div class="textResults" style="font-family: 'Plafair Display', Serif; font-size: 16.5px;">Melhoria e padronização dos laboratórios de informática</div>
                                    </div>
                                    <div class="eight wide column"><img class="ui tiny image centralize" src="{{asset('onePage/img/resultImages/nds.png')}}">
                                        <div class="textResults" style="font-family: 'Plafair Display', Serif; font-size: 16.5px;">
                                            Automatização de processos administrativos e estudantis</div>
                                    </div>
                                    <div class="eight wide column"><img class="ui tiny image centralize" src="{{asset('onePage/img/resultImages/nor.png')}}">
                                        <div class="textResults" style="font-family: 'Plafair Display', Serif; font-size: 16.5px;">Gerências de comunicação e segurança na rede</div>
                                    </div>
                                    <div class="eight wide column"><img class="ui tiny image centralize" src="{{asset('onePage/img/resultImages/cti.png')}}">
                                        <div class="textResults" style="font-family: 'Plafair Display', Serif; font-size: 16.5px;">
                                            Implantação de documentações e processos </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br /><br /><br /><br />

                <div style="margin-top: -55px;">
                    <div class="centralize fonts">
                        <p></p>
                        <h2 class="section-heading text-uppercase fonts">Sistemas
                            <p></p>
                        </h2>
                    </div>
                    <div class="banner" id="banner">

                        <div>
                            <img src="{{asset('Icones/ouvidoria.png')}}">
                        </div>
                        <div>
                            <img src="{{asset('Icones/syschaves.png')}}">
                        </div>
                        <div>
                            <img src="{{asset('Icones/sysfrequencia.png')}}">
                        </div>
                        <div>
                            <img src="{{asset('Icones/suporte.png')}}">
                        </div>
                        <div>
                            <img src="{{asset('Icones/sysponto.png')}}">
                        </div>
                        <div>
                            <img src="{{asset('Icones/sysra.png')}}">
                        </div>
                        <div>
                            <img src="{{asset('Icones/sysreserva.png')}}">
                        </div>
                        <div>
                            <img src="{{asset('Icones/sysfrota.png')}}">
                        </div>
                        <div>
                            <img src="{{asset('Icones/intranet.png')}}">
                        </div>
                    </div>
                </div><br /><br /><br /><br /><br /><br />
                <div id="6"><br>
                    <div class="centralize" style="margin-bottom: 33px;">
                        <h2 class="section-heading text-uppercase fonts ano">Atendimentos em 2019</h2>
                    </div>
                    <div class="ui grid center aligned attendance">
                        @foreach ($atendimentos as $a) @if($a->nome == "Rede")
                        <div class="three wide computer twelve wide mobile column left aligned center aligned verdon"><i class="signal icon brancon"></i><br><a style="font-size: 28px; color: white;" id="rede">{{$a->quantidade}}</a><br><a style="color: white;">Rede</a></div>
                        @endif @if($a->nome == "Arquivo")
                        <div class="three wide computer twelve wide mobile column left aligned center aligned verdon"><i class="folder open icon brancon"></i><br><a style="font-size: 28px; color: white;" id="arquivo">{{$a->quantidade}}</a><br><a style="color: white;">Arquivo</a></div>
                        @endif @if($a->nome == "Impressora")
                        <div class="three wide computer twelve wide mobile column left aligned center aligned verdon"><i class="print icon brancon"></i><br><a style="font-size: 28px; color: white;" id="impressora">{{$a->quantidade}}</a><br><a style="color: white;">Impressora</a></div>
                        @endif @if($a->nome == "Computador")
                        <div class="three wide computer twelve wide mobile column left aligned center aligned verdon"><i class="tv icon brancon"></i><br><a style="font-size: 28px; color: white;" id="computador">{{$a->quantidade}}</a><br><a style="color: white;">Computador</a></div>
                        @endif @if($a->nome == "Programa")
                        <div class="three wide computer twelve wide mobile column left aligned center aligned verdon"><i class="code icon brancon"></i><br><a style="font-size: 28px; color: white;" id="programa">{{$a->quantidade}}</a><br><a style="color: white;">Programa</a></div>
                        @endif @endforeach

                    </div>
                </div>
                <!--<div class="centralize" style="font-size: 32px; margin-top: 33px;"><p><a style="font-family: 'Plafair Display', Serif;">PORTIFOLIO</a></p></div>-->
                <section class="bg-light" id="technews">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center" style="margin-bottom: -70px; margin-top: 5em;">
                                <h2 class="section-heading text-uppercase">TechNews</h2>
                                <h3 class="section-subheading text-muted portifolio">Lorem ipsum dolor sit amet consectetur.</h3>
                            </div>
                        </div>
                        <div class="row" id="porti">

                            @foreach ($technews as $valor)
                            <div class="col-md-4 col-sm-6 portfolio-item portifolioCenter" style="text-align: center;">
                                <a class="portfolio-link" data-toggle="modal" href="#technewsModal{{$valor->id}}">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"></div>
                                    </div>
                                    <img class="img-fluid" src="/storage/{{$valor->image}}" alt="" style="width: 20em; height: 20em;">
                                </a>
                                <div class="portfolio-caption" style="margin: 0px; font-family: 'raleway', sans-serif;">
                                    <h4 style="font-size: 1.5rem">{{$valor->titulo}}</h4>
                                    <p class="text-muted">{{$valor->subtitulo}}</p>

                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </section>
                <div id="addModal">
                    <!-- Modals -->
                    @foreach ($technews as $valor)

                    <div class="portfolio-modal modal fade" id="technewsModal{{$valor->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="close-modal" data-dismiss="modal">
                                    <div class="lr">
                                        <div class="rl"></div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 mx-auto">
                                            <div class="modal-body">
                                                <!-- Project Details Go Here -->
                                                <h2 class="text-uppercase projectName">{{$valor->titulo}}</h2>
                                                <p class="item-intro text-muted">{{$valor->subtitulo}}</p>
                                                <img class="img-fluid d-block mx-auto" src="storage/{{$valor->image}}" alt="">
                                                <p class="bodyModal">{{$valor->descricao}}</p>
                                                <ul class="list-inline">
                                                    <li>{{$valor->data}}</li>
                                                    <li>{{$valor->cliente}}</li>
                                                </ul>
                                                <input class="btn btn-primary" value="Fechar" data-dismiss="modal" type="button">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>
            </div><br><br>
            <section id="7" class="faq">
                <div class="container" ><br>

                    <div class="section-header">
                        <h3 class="section-title">PERGUNTAS E ESCLARECIMENTOS</h3>
                        <span class="section-divider underline2"></span>
                        <p class="section-description portifolio">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                    </div>

                    <ul id="faq-list" class="wow fadeInUp">
                        @foreach ($facs as $f)
                        <li>
                            <a data-toggle="collapse" class="collapsed" href="#faq{{$f->id}}">{{$f->perguntas}}<i
                  class="ion-android-remove"></i></a>
                            <div id="faq{{$f->id}}" class="collapse" data-parent="#faq-list">
                                <p>
                                    {{$f->respostas}}
                                </p>
                            </div>
                        </li>
                        @endforeach

                    </ul>

                </div>
            </section>

            <section class="section-bg"><br>
                <div class="container" id="8"><br>
                    <div class="section-header">
                        <h3 class="section-title">NOSSO TIME!</h3>
                        <span class="section-divider underline2"></span>
                        <p class="section-description portifolio">O segredo de um grande sucesso está no trabalho de uma grande equipe.
                        </p>
                    </div>
                    <div class="row wow fadeInUp" id="time">
                        @foreach ($time as $t)
                        <div class="col-lg-3 col-md-6">
                            <div class="member" style="text-align: center;">
                                <div class="pic"><img src="/storage/{{$t->image}}" style="height: 18rem" alt=""></div>
                                <h4 class="font-weight-bold" style="font-size: 18px">{{$t->nome}}</h4>
                                <span class="font-italic" style="font-size: 12px">{{$t->cargo}}</span><br>
                                <span class="font-italic">{{$t->email}}</span><br>

                            </div>
                        </div>

                        @endforeach


                    </div>

                </div>
            </section>
            <!-- #team -->

            {{-- @foreach ($cond as $v)
            <h1>{{$v->titulo}}</h1>
            @endforeach --}}

            <footer><br>
                <h1>Nós <i class="heart icon"></i> novos colaboradores!</h1>

                <div class="textFooter">
                    <h2>3878-6319</h2>
                </div>


                <div class="textFooter">
                    <h2>cti.maracanau@ifce.edu.br</h2>
                </div><br>

                <center>
                    <table id="desaparecer" class="aaaa">
                        <tbody>
                            <tr>
                                <td class="qualquer" style="visibility: hidden;">
                                    <h2><a href="/linhaDoTempo" id="link">Login</a></h2>
                                </td>
                                <td class="p"><img class="ui mini image" id="imageLogo" src="{{ asset('img/intra_bola_branca.png')}}" alt=""></td>
                                <td class="qualquer" style="visibility: hidden;">
                                    <h2><a href="/" id="link">IFCE</a></h2>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </center>



        </div>

        </footer>

    </div>
    </div>


    <script src="{{asset('onePage/js/Jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('onePage/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('onePage/js/semantic.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('onePage/js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('onePage/js/slick.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('onePage/js/menu-scroll.js')}}" type="text/javascript"></script>
    <script>
        // function hideMenu() {
        //
        // }

        var menu = false;
        $(document).ready(function() {
            console.clear();

            $("#desaparecer").hover(
                function() {
                    //Ao posicionar o cursor sobre a div
                    $(".qualquer").css('visibility', 'visible');

                },


            );

            var date = new Date();
            var ano = date.getFullYear();
            $(".ano").html("Atendimentos em " + ano);
            $("#hamburguer").click(function() {
                $(".ui.sidebar").sidebar("toggle");
                $("body").removeClass("pushable");
                menu = true;
                $("#hamburguer").hide();
            });

            $("#hamburguerMobile, #closeSidebar").click(function() {
                $(".ui.animating.sidebar").css("visibility", "hidden");
                $("#hamburguer").show();
                $(".ui.sidebar").sidebar("toggle");
                menu = false;
            });

            $(".ancora").click(function() {
                var id = $(this).attr("name");

                $(this).addClass('active');
                ancora(id);
            });

            $("#total").click(function() {
                if (menu) {
                    $("#hamburguer").show();
                    menu = false;
                }
            });


            // $(".textFooter").mouseout(function() {
            //     $(".textFooter").css("display", "none");
            // });

            function clearClassActive(elemento, valorClass) {
                $(elemento).each(function() {
                    $(this).removeClass(valorClass);
                });
            }

            function ancora(id) {
                $('html,body').animate({
                    scrollTop: $("#" + id).offset().top - 65
                }, 'slow');
            }

            function addClassActive(elemento, valorId, valorClass) {
                $(elemento + "#" + valorId).addClass(valorClass);
                $(elemento + "#" + valorId).css("transition", "0.5s");
            }

            $(".ui.menu .right .item").click(function() {
                var valorId = $(this).attr("id");
                clearClassActive(".ui.menu .right .item", "active");
                addClassActive(".ui.menu .right .item", valorId, "active");
            });

            $("button").click(function() {
                $(".bodyPart01").each(function() {
                    alert($("h3").text().split(' '));
                });
            });
            $('a#home').trigger('click');
        });
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <script>
        $(document).ready(function() {
            $('.banner').slick({
                slidesToShow: 8,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    }, {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    }, {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }

                ]
            });
        });
    </script>

</body>