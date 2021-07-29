<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Emili Ananias Confeitaria | Copyright 2021 - Todos os direitos reservados</title>

    <link rel="shortcut icon" href="{{ asset('assets/icon/favicon.ico') }}" />
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>

    <script>
        if(!sessionStorage.getItem("_swa")&&document.referrer.indexOf(location.protocol+"//"+location.host)!== 0){fetch("https://counter.dev/track?"+new URLSearchParams({referrer:document.referrer,screen:screen.width+"x"+screen.height,user:"viniciusldemelo",utcoffset:"-3"}))};sessionStorage.setItem("_swa","1");
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/60bef2a8dd60a20abbe52349/1f7ku7p22';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    @stack('scripts-css')
</head>

<body>
    <div class="row topo-blog one-edge-shadow">
        <div class="col-3">
            <img id="logomarca" src="{{ asset('assets/images/logomarca.webp') }}" onclick="irPraHome()">
        </div>
        <div class="col-14 col-sm-14 col-md-14 col-lg-14 col-xl-14" id="topo-texto">
            <p>"A confeitaria transformou a minha</p>
            <p id="topo-segunda-linha">vida e eu quero transformar a sua."</p>
            <p id="autor-desconhecido">Autor desconhecido</p>
        </div>
    </div>

    <div class="row menu-blog one-edge-shadow">
        <div class="col-3 d-flex justify-content-center texto-menu">
            <img class="icones-menu" src="{{ asset('assets/images/home.webp') }} ">
            <a class="link-menu" href="#">Início</a>
        </div>
        <div class="col-3 d-flex justify-content-center texto-menu">
            <img class="icones-menu" src="{{ asset('assets/images/sobre.webp') }} ">
            <a class="link-menu" href="#">Sobre Emili</a>
        </div>
        <div class="col-3 d-flex justify-content-center texto-menu">
            <img class="icones-menu" src="{{ asset('assets/images/fazer-encomenda.webp') }} ">
            <a class="link-menu" href="#">Fazer encomenda</a>
        </div>
        <div class="col-3 d-flex justify-content-center texto-menu">
            <img class="icones-menu" src="{{ asset('assets/images/aprenda-com-a-emili.webp') }} ">
            <a class="link-menu" href="#">Aprenda com a Emili</a>
        </div>
    </div>