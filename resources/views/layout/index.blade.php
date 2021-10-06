<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Intranet</title>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css')}}"/>
        <link href="{{ asset('img/favicon.ico')}}" rel="shortcut icon" type="image/vnd.microsoft.icon" />   
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/icon.min.css')}}"/>
        <script src="{{ asset('js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/semantic.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
    </head>
    <body>
        <!--        <div class="ui active inverted dimmer" id="loader">
                    <div class="ui large text loader">Carregando...</div>
                </div>-->
        <div class="ui grid">
            <div class="mobile only row">
                <div class="ui sidebar vertical left menu overlay visible very thin icon" style="-webkit-transition-duration: 0.1s; overflow: visible !important; background-color: #006D44 !important;" id="sidebarMobile">
                    <div class="item logo">
                        <img src="img/LogoSysraBranca.png"  style="display: none" id="imgBig"/>
                        <img src="img/intra_bola_branca.png" id="imgSmall" />
                    </div>
                    <div class="ui accordion displaynone">
                        <a class="item notContent" id="paginaInicial">
                            <p class="pTitle"><i class="home layout icon" id="iconSidebar"></i> <span id="textDrop">Página Inicial</span></p>
                        </a>
                        <a class="item notContent" id="voltar">
                            <p class="pTitle"><i class="arrow alternate circle left outline icon" id="iconSidebar"></i> <span id="textDrop">Voltar</span></p>
                        </a>
                        <a class="item notContent" id="pesquisaSatisfacao">
                            <p class="pTitle"><i class="search icon" id="iconSidebar"></i> <span id="textDrop">Pesquisa Satisfação</span></p>
                        </a>
                        <a class="title item" id="pessoa">
                            <p class="pTitle"><i class="user icon" id="iconSidebar"></i> <span id="textDrop">Pessoa</span> <i class="dropdown icon" id="dropdownIconSidebar"></i></p>
                        </a>
                        <div class="content" id="pessoa">
                            <div class="" id="subSubMenu">
                                <a class="title item" id="permissao">
                                    <p class="pTitle"><span style="">Permissão</span> <i class="dropdown icon" id="dropdownIconSidebarSub"></i></p>
                                </a>
                                <div class="content" id="permissao">
                                    <a class="item itemInSubMenu aLoadContainer" id="cadastrarPermissao" href="#!">Cadastrar Permissão
                                    </a>
                                    <a class="item itemInSubMenu aLoadContainer" id="gerenciarPermissao" href="#!">Gerenciar Permissão
                                    </a>
                                </div>
                            </div>
                            <a class="item itemNotInSubMenu notContent" id="cadastrarPessoa" href="#!"><span>Cadastrar Pessoa</span>
                            </a>
                            <a class="item itemNotInSubMenu notContent" id="gerenciarPessoa" href="#!"><span>Gerenciar Pessoa</span>
                            </a>
                        </div>
                    </div>
                    <div class="" id="iconesSidebarMenor">
                        <div class="ui dropdown item" id="dropdownToOneIcon">
                            <z class="displaynone">Página Inicial</z>
                            <i class="home layout icon" id="paginaInicial"></i>
                        </div>
                        <div class="ui dropdown item" id="dropdownToOneIcon">
                            <z class="displaynone">Voltar</z>
                            <i class="arrow alternate circle left outline icon" id="voltar"></i>
                        </div>
                        <div class="ui dropdown item" id="dropdownToOneIcon">
                            <z class="displaynone">Pesquisa Satisfação</z>
                            <i class="search icon" id="pesquisaSatisfacao"></i>
                        </div>
                        <div class="ui dropdown link item" id="dropdownToOneIcon">
                            <z class="displaynone">Pessoa</z>
                            <i class="user icon" id="pessoa"></i>
                            <div class="menu pessoa" id="dropwdownIcones">
                                <div class="header">
                                    Pessoa
                                </div>
                                <div class="ui divider"></div>
                                <a class="item" href="#!"> <i class="dropdown icon" style="margin-top: -2px !important;"></i>Permissão
                                    <div class="menu">
                                        <div class="item">Cadastrar Permissão</div>
                                        <div class="item">Gerenciar Permissão</div>
                                    </div>
                                </a>
                                <a class="item" href="#!">Cadastrar Pessoa</a>
                                <a class="item" href="#!">Gerenciar Pessoa</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="computer only row">
                <div class="ui sidebar vertical left menu overlay visible" style="-webkit-transition-duration: 0.1s; overflow: visible !important; background-color: #006D44 !important;" id="sidebarPC">
                    <div class="item logo">
                        <img src="img/LogoSysraBranca.png"  id="imgBig"/>
                        <img src="img/intra_bola_branca.png" style="display: none"  id="imgSmall" />
                    </div>
                    <div class="ui accordion">
                        <a class="item notContent" id="paginaInicial">
                            <p class="pTitle"><i class="home layout icon" id="iconSidebar"></i> <span id="textDrop">Página Inicial</span></p>
                        </a>
                        <a class="item notContent" id="voltar">
                            <p class="pTitle"><i class="arrow alternate circle left outline icon" id="iconSidebar"></i> <span id="textDrop">Voltar</span></p>
                        </a>
                        <a class="item notContent" id="pesquisaSatisfacao">
                            <p class="pTitle"><i class="search icon" id="iconSidebar"></i> <span id="textDrop">Pesquisa Satisfação</span></p>
                        </a>
                        <a class="title item" id="pessoa">
                            <p class="pTitle"><i class="user icon" id="iconSidebar"></i> <span id="textDrop">Pessoa</span> <i class="dropdown icon" id="dropdownIconSidebar"></i></p>
                        </a>
                        <div class="content" id="pessoa">
                            <div class="" id="subSubMenu">
                                <a class="title item" id="permissao">
                                    <p class="pTitle"><span style="">Permissão</span> <i class="dropdown icon" id="dropdownIconSidebarSub"></i></p>
                                </a>
                                <div class="content" id="permissao">
                                    <a class="item itemInSubMenu aLoadContainer" id="cadastrarPermissao" href="#!">Cadastrar Permissão
                                    </a>
                                    <a class="item itemInSubMenu aLoadContainer" id="gerenciarPermissao" href="#!">Gerenciar Permissão
                                    </a>
                                </div>
                            </div>
                            <a class="item itemNotInSubMenu notContent" id="cadastrarPessoa" href="#!"><span>Cadastrar Pessoa</span>
                            </a>
                            <a class="item itemNotInSubMenu notContent" id="gerenciarPessoa" href="#!"><span>Gerenciar Pessoa</span>
                            </a>
                        </div>

                    </div>
                    <div class="" id="iconesSidebarMenor">
                        <div class="ui dropdown item displaynone" id="dropdownToOneIcon">
                            <z>Página Inicial</z>
                            <i class="home layout icon" id="paginaInicial"></i>
                        </div>
                        <div class="ui dropdown item displaynone" id="dropdownToOneIcon">
                            <z>Voltar</z>
                            <i class="arrow alternate circle left outline icon" id="voltar"></i>
                        </div>
                        <div class="ui dropdown item displaynone" id="dropdownToOneIcon">
                            <z>Pesquisa Satisfação</z>
                            <i class="search icon" id="pesquisaSatisfacao"></i>
                        </div>
                        <div class="ui dropdown link item displaynone" id="dropdownToOneIcon">
                            <z>Pessoa</z>
                            <i class="user icon" id="pessoa"></i>
                            <div class="menu pessoa" id="dropwdownIcones">
                                <div class="header">
                                    Pessoa
                                </div>
                                <div class="ui divider"></div>
                                <a class="item" href="#!"> <i class="dropdown icon" style="margin-top: -2px !important;"></i>Permissão
                                    <div class="menu">
                                        <div class="item">Cadastrar Permissão</div>
                                        <div class="item">Gerenciar Permissão</div>
                                    </div>
                                </a>
                                <a class="item" href="#!">Cadastrar Pessoa</a>
                                <a class="item" href="#!">Gerenciar Pessoa</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tablet only row">
                <div class="ui sidebar vertical left menu overlay visible" style="-webkit-transition-duration: 0.1s; overflow: visible !important; background-color: #006D44 !important;" id="sidebarTablet">
                    <div class="item logo">
                        <img src="img/LogoSysraBranca.png"  id="imgBig"/>
                        <img src="img/intra_bola_branca.png" style="display: none"  id="imgSmall" />
                    </div>
                    <div class="ui accordion">
                        <a class="item notContent" id="paginaInicial">
                            <p class="pTitle"><i class="home layout icon" id="iconSidebar"></i> <span id="textDrop">Página Inicial</span></p>
                        </a>
                        <a class="item notContent" id="voltar">
                            <p class="pTitle"><i class="arrow alternate circle left outline icon" id="iconSidebar"></i> <span id="textDrop">Voltar</span></p>
                        </a>
                        <a class="item notContent" id="pesquisaSatisfacao">
                            <p class="pTitle"><i class="search icon" id="iconSidebar"></i> <span id="textDrop">Pesquisa Satisfação</span></p>
                        </a>
                        <a class="title item" id="pessoa">
                            <p class="pTitle"><i class="user icon" id="iconSidebar"></i> <span id="textDrop">Pessoa</span> <i class="dropdown icon" id="dropdownIconSidebar"></i></p>
                        </a>
                        <div class="content" id="pessoa">
                            <div class="" id="subSubMenu">
                                <a class="title item" id="permissao">
                                    <p class="pTitle"><span style="">Permissão</span> <i class="dropdown icon" id="dropdownIconSidebarSub"></i></p>
                                </a>
                                <div class="content" id="permissao">
                                    <a class="item itemInSubMenu aLoadContainer" id="cadastrarPermissao" href="#!">Cadastrar Permissão
                                    </a>
                                    <a class="item itemInSubMenu aLoadContainer" id="gerenciarPermissao" href="#!">Gerenciar Permissão
                                    </a>
                                </div>
                            </div>
                            <a class="item itemNotInSubMenu notContent" id="cadastrarPessoa" href="#!"><span>Cadastrar Pessoa</span>
                            </a>
                            <a class="item itemNotInSubMenu notContent" id="gerenciarPessoa" href="#!"><span>Gerenciar Pessoa</span>
                            </a>
                        </div>
                    </div>
                    <div class="" id="iconesSidebarMenor">
                        <div class="ui dropdown item displaynone" id="dropdownToOneIcon">
                            <z>Página Inicial</z>
                            <i class="home layout icon" id="paginaInicial"></i>
                        </div>
                        <div class="ui dropdown item displaynone" id="dropdownToOneIcon">
                            <z>Voltar</z>
                            <i class="arrow alternate circle left outline icon" id="voltar"></i>
                        </div>
                        <div class="ui dropdown item displaynone" id="dropdownToOneIcon">
                            <z>Pesquisa Satisfação</z>
                            <i class="search icon" id="pesquisaSatisfacao"></i>
                        </div>
                        <div class="ui dropdown link item displaynone" id="dropdownToOneIcon">
                            <z>Pessoa</z>
                            <i class="user icon" id="pessoa"></i>
                            <div class="menu pessoa" id="dropwdownIcones">
                                <div class="header">
                                    Pessoa
                                </div>
                                <div class="ui divider"></div>
                                <a class="item" href="#!"> <i class="dropdown icon" style="margin-top: -2px !important;"></i>Permissão
                                    <div class="menu">
                                        <div class="item">Cadastrar Permissão</div>
                                        <div class="item">Gerenciar Permissão</div>
                                    </div>
                                </a>
                                <a class="item" href="#!">Cadastrar Pessoa</a>
                                <a class="item" href="#!">Gerenciar Pessoa</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="pusher">
            <div class="ui fixed menu asd borderless" style="" id="navbarSistema">
                <div class="ui grid">
                    <div class="computer only row">
                        <a class="item openbtn">
                            <i class="icon content"></i>
                        </a>
                    </div>
                    <div class="mobile only row">
                        <a class="item openbtnmobile">
                            <i class="icon content"></i>
                        </a>
                    </div>
                    <div class="tablet only row">
                        <a class="item openbtntablet">
                            <i class="icon content"></i>
                        </a>
                    </div>
                </div>
                <div class="right menu" id="iconesNavbar">
                    <div class="ui grid">
                        <div class="computer only row">
                            <a class="item">
                                <i class="th icon big" id="system"></i>
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a class="item">
                                <i class="bell icon big" id="notifications"></i>
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a class="item">
                                <i class="user icon big" id="informationsUser"></i>
                                <!--<img class="ui avatar image openDivNone" id="informationsUser" src="img/user.png" style="cursor: pointer;">-->
                            </a>
                            &nbsp;&nbsp;&nbsp;
                        </div>
                    </div>
                    <div class="ui popup bottom left transition hidden" id="popUpSystem">
                        <div class="ui one column relaxed equal height divided grid">
                            <div class="column">
                                <ul class="ulGeral" id="system">
                                    <li class="liGeral" id="system">
                                        <a class="aGeral" id="system">
                                            <img src="img/logo_sysreserva.png" class="imgSys">
                                            <span>SysReserva</span>
                                        </a>
                                    </li>
                                    <li class="liGeral" id="system">
                                        <a class="aGeral" id="system">
                                            <img src="img/logo_sysreserva.png" class="imgSys">
                                            <span>SysReserva</span>
                                        </a>
                                    </li>
                                    <li class="liGeral" id="system">
                                        <a class="aGeral" id="system">
                                            <img src="img/logo_sysreserva.png" class="imgSys">
                                            <span>SysReserva</span>
                                        </a>
                                    </li>
                                    <li class="liGeral" id="system">
                                        <a class="aGeral" id="system">
                                            <img src="img/logo_sysreserva.png" class="imgSys">
                                            <span>SysReserva</span>
                                        </a>
                                    </li> <li class="liGeral" id="system">
                                        <a class="aGeral" id="system">
                                            <img src="img/logo_sysreserva.png" class="imgSys">
                                            <span>SysReserva</span>
                                        </a>
                                    </li>
                                    <li class="liGeral" id="system">
                                        <a class="aGeral" id="system">
                                            <img src="img/logo_sysreserva.png" class="imgSys">
                                            <span>SysReserva</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Pop Up para sistemas -->
                    <div class="ui popup bottom left transition hidden" id="popUpNotifications">
                        <div class="ui one column relaxed equal height divided grid">
                            <div class="column">
                                <div class="ui comments" id="commentsNotifications">
                                    <h3 class="ui dividing header">Notificações</h3>
                                    <div class="comment">
                                        <a class="avatar">
                                            <img src="img/matt.jpg">
                                        </a>
                                        <div class="content">
                                            <a class="author">Emerson Henrique</a>
                                            <div class="metadata">
                                                <span class="date">Hoje as 09:40AM</span>
                                            </div>
                                            <div class="text">
                                                Termo de compromisso de estágio disponível para download
                                            </div>
                                            <!--                                            <div class="actions">
                                                                                            <a class="reply">Reply</a>
                                                                                        </div>-->
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <a class="avatar">
                                            <img src="img/matt.jpg">
                                        </a>
                                        <div class="content">
                                            <a class="author">Emerson Henrique</a>
                                            <div class="metadata">
                                                <span class="date">Hoje as 09:40AM</span>
                                            </div>
                                            <div class="text">
                                                Termo de compromisso de estágio disponível para download
                                            </div>
                                            <!--                                            <div class="actions">
                                                                                            <a class="reply">Reply</a>
                                                                                        </div>-->
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <a class="avatar">
                                            <img src="img/matt.jpg">
                                        </a>
                                        <div class="content">
                                            <a class="author">Emerson Henrique</a>
                                            <div class="metadata">
                                                <span class="date">Hoje as 09:40AM</span>
                                            </div>
                                            <div class="text">
                                                Termo de compromisso de estágio disponível para download
                                            </div>
                                            <!--                                            <div class="actions">
                                                                                            <a class="reply">Reply</a>
                                                                                        </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Pop Up para sistemas -->
                    <div class="ui popup bottom left transition hidden" id="popUpInformationUser">
                        <div class="ui one column relaxed equal height divided grid">
                            <div class="column">
                                <div class="ui cards">
                                    <div class="card"  id="cardUser">
                                        <div class="content">
                                            <img class="right floated mini ui image" src="img/matt.jpg">
                                            <div class="header">
                                                Anderson Alves
                                            </div>
                                            <div class="meta">
                                                Administrador
                                            </div>
                                            <div class="description">
                                                Último acesso: Hoje, 01 de julho de 2019
                                            </div>
                                        </div>
                                        <div class="extra content">
                                            <div class="ui two buttons">
                                                <div class="ui basic green button">Conta</div>
                                                <div class="ui basic red button">Sair</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui container containerPrincipal segment" id="containerToInformations" style="">
                
            </div>
        </div>
    </body>
</html>
