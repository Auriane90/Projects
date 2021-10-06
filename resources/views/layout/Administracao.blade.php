<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Informática - ADM</title>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css')}}"/>
        <link href="{{ asset('img/favicon.ico')}}" rel="shortcut icon" type="image/vnd.microsoft.icon" />   
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/icon.min.css')}}"/>
        <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/semantic.min.js')}}" ></script>
        <script type="text/javascript" src="{{ asset('js/app.js')}}" ></script>
        <script type="text/javascript" src="{{ asset('js/sweetalert2.all.min.js')}}" ></script>
        <script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/dataTables.semanticui.min.js')}}"></script>

        <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
        @yield('css')
    </head>
    <body>
        <!--        <div class="ui active inverted dimmer" id="loader">
                    <div class="ui large text loader">Carregando...</div>
                </div>-->
        <div class="ui grid">
            <div class="mobile only row">
                <div class="ui sidebar vertical left menu overlay visible very thin icon" style="-webkit-transition-duration: 0.1s; overflow: visible !important; background-color: #006D44 !important;" id="sidebarMobile">
                    <div class="item logo">
                        <img src="Logos/logoNav.png"  style="display: none" id="imgBig"/>
                    </div>
                    <div class="ui accordion displaynone">
                        <a href="/linhaDoTempo" class="item notContent" id="linhaDoTempo">
                            <p class="pTitle"><i class="history icon"></i><span>Linha do Tempo</span></p>
                        </a>
                        <a href="/sistemas" class="item notContent" id="sistemas">
                            <p class="pTitle"><i class="desktop icon active" id="iconSidebar"></i> <span id="textDrop">Sistemas</span></p>
                        </a>
                        <a href="/atendimentos" class="item notContent" id="atendimentos">
                            <p class="pTitle"><i class="phone volume icon" id="iconSidebar"></i> <span id="textDrop">Atendimentos</span></p>
                        </a>
                        <a href="/technews" class="item notContent" id="technews">
                            <p class="pTitle"><i class="newspaper icon" id="iconSidebar"></i> <span id="textDrop">Technews</span></p>
                        </a>
                        <a href="/fac" class="item notContent" id="fac">
                            <p class="pTitle"><i class="question icon" id="iconSidebar"></i> <span id="textDrop">FAC</span></p>
                        </a>
                        <a href="/nossoTime" class="item notContent" id="nossoTime">
                            <p class="pTitle"><i class="users icon" id="iconSidebar"></i> <span id="textDrop">Nosso Time</span></p>
                        </a>
                        
                       
                    </div>
                    <div class="" id="iconesSidebarMenor">
                        <div class="ui dropdown item" id="dropdownToOneIcon">
                            <z href="/linhaDoTempo" class="displaynone">Linha do Tempo</z>
                            <i class="history icon"" id="linhaDoTempo"></i>
                        </div>
                        <div class="ui dropdown item" id="dropdownToOneIcon">
                            <z href="/sistemas" class="displaynone">Sistema</z>
                            <i class="desktop icon active" id="sistemas"></i>
                        </div>
                        <div class="ui dropdown item" id="dropdownToOneIcon">
                            <z href="/atendimentos" class="displaynone">Atendimentos</z>
                            <i class="phone volume icon" id="atendimentos"></i>
                        </div>
                        <div class="ui dropdown item" id="dropdownToOneIcon">
                            <z href="/technews" class="displaynone">Technews</z>
                            <i class="newspaper icon" id="technews"></i>
                        </div>
                        <div class="ui dropdown item" id="dropdownToOneIcon">
                            <z href="/fac" class="displaynone">FAC</z>
                            <i class="question icon" id="fac"></i>
                        </div>
                        <div class="ui dropdown item" id="dropdownToOneIcon">
                            <z href="/nossoTime" class="displaynone">Nosso Time</z>
                            <i class="users icon" id="nossoTime"></i>
                        </div>
                        
                        

                    </div>
                </div>
            </div>
            <div class="computer only row">
                <div class="ui sidebar vertical left menu overlay visible" style="-webkit-transition-duration: 0.1s; overflow: visible !important; background-color: #006D44 !important;" id="sidebarPC">
                    <div class="item logo">
                        <img src="Logos/logoNav.png"  id="imgBig"/>
                    </div>
                    <div class="ui accordion">
                        <a href="/linhaDoTempo" class="item notContent{{ (request()->is('linhaDoTempo'.'*')) ? ' active' : '' }}" id="linhaDoTempo">
                            <p class="pTitle"><i class="history icon" id="iconSidebar"></i> <span id="textDrop">Linha do Tempo</span></p>
                        </a>
                        <a href="/sistemas" class="item notContent{{ (request()->is('sistemas'.'*')) ? ' active' : '' }}" id="sistemas">
                            <p class="pTitle"><i class="desktop icon active" id="iconSidebar"></i> <span id="textDrop">Sistemas</span></p>
                        </a>
                        <a href="/atendimentos" class="item notContent{{ (request()->is('atendimentos'.'*')) ? ' active' : '' }}" id="atendimentos">
                            <p class="pTitle"><i class="phone volume icon" id="iconSidebar"></i> <span id="textDrop">Atendimentos</span></p>
                        </a>
                        <a href="/technews" class="item notContent{{ (request()->is('technews'.'*')) ? ' active' : '' }}" id="technews">
                            <p class="pTitle"><i class="newspaper icon" id="iconSidebar"></i> <span id="textDrop">Technews</span></p>
                        </a>
                        <a href="/fac" class="item notContent{{ (request()->is('fac'.'*')) ? ' active' : '' }}" id="fac">
                            <p class="pTitle"><i class="question icon" id="iconSidebar"></i> <span id="textDrop">FAC</span></p>
                        </a>
                        <a href="/nossoTime" class="item notContent{{ (request()->is('nossoTime'.'*')) ? ' active' : '' }}" id="nossoTime">
                            <p class="pTitle"><i class="users icon" id="iconSidebar"></i> <span id="textDrop">Nosso Time</span></p>
                        </a>
                        
                        

                    </div>
                    <div class="" id="iconesSidebarMenor">
                        <div class="ui dropdown item displaynone" id="dropdownToOneIcon">
                            <z>Linha do Tempo</z>
                            <i class="history icon"" id="linhaDoTempo" href="/linhaDoTempo"></i>
                        </div>
                        <div class="ui dropdown item displaynone" id="dropdownToOneIcon">
                            <z href="/sistemas">Sistemas</z>
                            <i class="desktop icon active" id="sistemas"></i>
                        </div>
                        <div class="ui dropdown item displaynone" id="dropdownToOneIcon">
                            <z href="/atendimentos">Atendimentos</z>
                            <i class="phone volume icon" id="atendimentos"></i>
                        </div>
                        <div class="ui dropdown item displaynone" id="dropdownToOneIcon">
                            <z href="/technews">Technews</z>
                            <i class="newspaper icon" id="technews"></i>
                        </div>
                        <div class="ui dropdown item displaynone" id="dropdownToOneIcon">
                            <z href="/fac">FAC</z>
                            <i class="question icon" id="fac"></i>
                        </div>
                        <div class="ui dropdown item displaynone" id="dropdownToOneIcon">
                            <z href="/nossoTime">Nosso Time</z>
                            <i class="users icon" id="nossoTime"></i>
                        </div>
                        

                    </div>
                </div>
            </div>
            <div class="tablet only row">
                <div class="ui sidebar vertical left menu overlay visible" style="-webkit-transition-duration: 0.1s; overflow: visible !important; background-color: #006D44 !important;" id="sidebarTablet">
                    <div class="item logo">
                        <img src="Logos/logoNav.png"  id="imgBig"/>
                    </div>
                    <div class="ui accordion">
                        <a href="/linhaDoTempo" class="item notContent" id="linhaDoTempo">
                            <p class="pTitle"><i class="history icon"" id="iconSidebar"></i> <span id="textDrop">Linha do tempo</span></p>
                        </a>
                        <a href="/sistemas" class="item notContent" id="sistemas">
                            <p class="pTitle"><i class="desktop icon active" id="iconSidebar"></i> <span id="textDrop">Sistemas</span></p>
                        </a>
                        <a href="/atendimentos" class="item notContent" id="atendimentos">
                            <p class="pTitle"><i class="phone volume icon" id="iconSidebar"></i> <span id="textDrop">Atendimentos</span></p>
                        </a>
                        <a href="/technews" class="item notContent" id="technews">
                            <p class="pTitle"><i class="newspaper icon" id="iconSidebar"></i> <span id="textDrop">Technews</span></p>
                        </a>
                        <a href="/fac" class="item notContent" id="fac">
                            <p class="pTitle"><i class="question icon" id="iconSidebar"></i> <span id="textDrop">FAC</span></p>
                        </a>
                        <a href="/nossoTime" class="item notContent" id="nossoTime">
                            <p class="pTitle"><i class="users icon" id="iconSidebar"></i> <span id="textDrop">Nosso Time</span></p>
                        </a>

                        
                    </div>
                    <div class="" id="iconesSidebarMenor">
                        <div class="ui dropdown item displaynone" id="dropdownToOneIcon">
                            <z href="/linhaDoTempo">Linha do Tempo</z>
                            <i class="history icon"" id="linhaDoTempo"></i>
                        </div>
                        <div class="ui dropdown item displaynone" id="dropdownToOneIcon">
                            <z href="/sistemas">Sistemas</z>
                            <i class="desktop icon active" id="sistemas"></i>
                        </div>
                        <div class="ui dropdown item displaynone" id="dropdownToOneIcon">
                            <z href="/atendimentos">Atendimentos</z>
                            <i class="phone volume icon" id="atendimentos"></i>
                        </div>
                        <div class="ui dropdown item displaynone" id="dropdownToOneIcon">
                            <z href="/technews">Technews</z>
                            <i class="newspaper icon" id="technews"></i>
                        </div>
                        <div class="ui dropdown item displaynone" id="dropdownToOneIcon">
                            <z href="/fac">FAC</z>
                            <i class="question icon" id="fac"></i>
                        </div>
                        <div class="ui dropdown item displaynone" id="dropdownToOneIcon">
                            <z href="/nossoTime">Nosso Time</z>
                            <i class="users icon" id="nossoTime"></i>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>

        <div class="pusher">
            <div class="ui fixed menu asd borderless" style="" id="navbarSistema">
                <div class="ui grid">
                    <div class="computer only row">
                        <a href="javascript:void(0)" class="item openbtn">
                            <i class="icon content"></i>
                        </a>
                    </div>
                    <div class="mobile only row">
                        <a href="" class="item openbtnmobile">
                            <i class="icon content"></i>
                        </a>
                    </div>
                    <div class="tablet only row">
                        <a href="" class="item openbtntablet">
                            <i class="icon content"></i>
                        </a>
                    </div>
                </div>
                <div class="right menu" id="iconesNavbar">
                    <div class="ui grid">
                        <div class="computer only row">
                            <a href="" class="item">
                                <i class="th icon big" id="system"></i>
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="" class="item">
                                <i class="bell icon big" id="notifications"></i>
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="" class="item">
                                <img class="ui avatar image openDivNone" id="informationsUser" src="img/teste.jpg" style="cursor: pointer;">
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
                                        <a href="" class="aGeral" id="system">
                                            <img src="img/logo_sysreserva.png" class="imgSys">
                                            <span>SysReserva</span>
                                        </a>
                                    </li>
                                    <li class="liGeral" id="system">
                                        <a href="" class="aGeral" id="system">
                                            <img src="img/logo_sysreserva.png" class="imgSys">
                                            <span>SysReserva</span>
                                        </a>
                                    </li>
                                    <li class="liGeral" id="system">
                                        <a href="" class="aGeral" id="system">
                                            <img src="img/logo_sysreserva.png" class="imgSys">
                                            <span>SysReserva</span>
                                        </a>
                                    </li>
                                    <li class="liGeral" id="system">
                                        <a href="" class="aGeral" id="system">
                                            <img src="img/logo_sysreserva.png" class="imgSys">
                                            <span>SysReserva</span>
                                        </a>
                                    </li> <li class="liGeral" id="system">
                                        <a href="" class="aGeral" id="system">
                                            <img src="img/logo_sysreserva.png" class="imgSys">
                                            <span>SysReserva</span>
                                        </a>
                                    </li>
                                    <li class="liGeral" id="system">
                                        <a href="" class="aGeral" id="system">
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
                                        <a href="" class="avatar">
                                            <img src="img/matt.jpg">
                                        </a>
                                        <div class="content">
                                            <a href="" class="author">Emerson Henrique</a>
                                            <div class="metadata">
                                                <span class="date">Hoje as 09:40AM</span>
                                            </div>
                                            <div class="text">
                                                Termo de compromisso de estágio disponível para download
                                            </div>
                                            <!--                                            <div class="actions">
                                                                                            <a href="" class="reply">Reply</a>
                                                                                        </div>-->
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <a href="" class="avatar">
                                            <img src="img/matt.jpg">
                                        </a>
                                        <div class="content">
                                            <a href="" class="author">Emerson Henrique</a>
                                            <div class="metadata">
                                                <span class="date">Hoje as 09:40AM</span>
                                            </div>
                                            <div class="text">
                                                Termo de compromisso de estágio disponível para download
                                            </div>
                                            <!--                                            <div class="actions">
                                                                                            <a href="" class="reply">Reply</a>
                                                                                        </div>-->
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <a href="" class="avatar">
                                            <img src="img/matt.jpg">
                                        </a>
                                        <div class="content">
                                            <a href="" class="author">Emerson Henrique</a>
                                            <div class="metadata">
                                                <span class="date">Hoje as 09:40AM</span>
                                            </div>
                                            <div class="text">
                                                Termo de compromisso de estágio disponível para download
                                            </div>
                                            <!--                                            <div class="actions">
                                                                                            <a href="" class="reply">Reply</a>
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
                                            <div class="header">
                                                Seja Bem Vindo, Anderson
                                            </div>
                                            <div class="meta">
                                                Administrador
                                            </div>
                                            <div class="description">
                                                Último acesso: 15/03/2018 10:50:23 <br/>Sessão: 05:31
                                            </div>
                                        </div>
                                        <div class="extra content">
                                            <div class="ui two buttons">
                                                <div class="ui button">Conta</div>
                                                <div class="ui red button">Sair</div>
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

                @yield('corpo')
                
            </div>
        </div>
    </body>
</html>
