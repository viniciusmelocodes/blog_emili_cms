<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('assets/icon/favicon.ico') }}" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}">

    <title>{{ $titlePageNavigator }}</title>
    <style>
        body {
            background: black;
            font-family: "Nunito";
        }

        .row {
            color: white;
        }

        .row-mobile {
            color: white;
            margin-left: 10px;
            margin-right: 10px;
        }

        .texto-centralizado {
            text-align: center;
            vertical-align: middle;
        }

        .imagem {
            width: 50%
        }

        .imagem-mobile {
            width: 100%
        }

        .margem-topo {
            padding-top: 30px
        }

        .margem-rodape {
            padding-bottom: 30px
        }
    </style>

    <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/inputmask/dist/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>

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

    <!-- counter.dev -->
    <script>
        if(!sessionStorage.getItem("_swa")&&document.referrer.indexOf(location.protocol+"//"+location.host)!== 0){fetch("https://counter.dev/track?"+new URLSearchParams({referrer:document.referrer,screen:screen.width+"x"+screen.height,user:"viniciusldemelo",utcoffset:"-3"}))};sessionStorage.setItem("_swa","1");
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PTTS4TZ');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '306799117540396');
        fbq('track', 'PageView');
    </script>

    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=306799117540396&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->

</head>

<body>
    @if ($isMobile)
    <div class="row row-mobile justify-content-center margem-topo">
        <img class="imagem-mobile" src="{{ asset('assets/images/header.png') }}" alt="">
    </div>

    <div class="row row-mobile texto-centralizado margem-topo">
        <h3>
            <b>VENHA PARTICIPAR COMIGO DURANTE 3 DIAS DE UMA MARATONA DE LIVES</b>
        </h3>
    </div>
    <div class="row row-mobile texto-centralizado margem-topo">
        <h5>
            Se você está pronta para viver uma vida que sempre quis e quer ter mais tempo e dinheiro para você e
            sua
            família, então venha comigo nessa jornada!
        </h5>
    </div>

    <div class="row row-mobile texto-centralizado margem-topo">
        <iframe class="video-emili" height="100%" width="100%" src="https://www.youtube.com/embed/cP0iF0-OQ-4"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>

    <div class="row row-mobile margem-topo margem-topo">
        <div class="col-12">

            <div class="mb-3 row">
                <input type="text" class="form-control form-control-lg" id="nome" placeholder="Nome completo">
            </div>
            <div class="mb-3 row">
                <input type="email" class="form-control form-control-lg" id="email" placeholder="Seu melhor e-mail">
            </div>
            <div class="mb-3 row">
                <input type="text" class="form-control form-control-lg" id="telefone"
                    data-inputmask="'mask': '(99) 99999-9999'" placeholder="Anote aqui o seu número de WhatsApp">
            </div>

            <div class="mb-3 row">
                <button class="btn btn-lg btn-success" onclick="garantirVaga()">
                    <h4>
                        <b>
                            GARANTA A SUA VAGA GRATUITA
                        </b>
                    </h4>
                </button>
            </div>
        </div>
    </div>

    <div class="row row-mobile justify-content-center margem-topo">
        <img class="imagem-mobile" src="{{ asset('assets/images/porta.png') }}" alt="">
    </div>

    <div class="row row-mobile texto-centralizado margem-topo">
        <h3>
            <b>
                <u>
                    CONFIRA A PROGRAMAÇÃO COMPLETA:
                </u>
            </b>
        </h3>
    </div>

    <div class="row row-mobile texto-centralizado margem-topo">
        <h5>
            <b>
                MONTAGEM DE TORTA NA TAÇA, IDEIA INCRÍVEL PARA VOCÊ ARRASAR NO NATAL OU EM QUALQUER OCASIÃO
            </b>
        </h5>
    </div>

    <div class="row row-mobile margem-topo margem-rodape">
        <h6 class="margem-topo">
            <b>Dia 14/12</b> (terça-feira) às 20:00 - <b>Descontração da Receita da Massa e da Compota de
                Frutas.</b>
        </h6>
        <h6 class="margem-topo">
            <b>Dia 15/12</b> (quarta-feira) às 20:00 - <b>Recheio de Creme de Ninho e Coco Cremoso.</b>
        </h6>
        <h6 class="margem-topo">
            <b>Dia 16/12</b> (quinta-feira) às 20:00 - <b>Montagem de Tortas na Taça.</b>
        </h6>
        <h6 class="margem-topo">
            Curtiu nossa programação? Então já marque na sua agenda para não perder nenhuma aula.
        </h6>
        <h6 class="margem-topo">Até lá.</h6>
        <p style="font-size: 12px"></p>
    </div>
    @else
    <div class="row justify-content-center margem-topo">
        <img class="imagem" src="{{ asset('assets/images/header.png') }}" alt="">
    </div>

    <div class="row texto-centralizado margem-topo">
        <div class="col-1"></div>
        <div class="col-10">
            <h3>
                <b>VENHA PARTICIPAR COMIGO DURANTE 3 DIAS DE UMA MARATONA DE LIVES</b>
            </h3>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row texto-centralizado margem-topo">
        <div class="col-1"></div>
        <div class="col-10">
            <h5>
                Se você está pronta para viver uma vida que sempre quis e quer ter mais tempo e dinheiro para você e
                sua
                família, então venha comigo nessa jornada!
            </h5>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row texto-centralizado margem-topo">
        <div class="col-1"></div>
        <div class="col-10">
            <iframe class="video-emili" width="600px" height="600px" src="https://www.youtube.com/embed/cP0iF0-OQ-4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row margem-topo margem-topo">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="mb-3 row">
                <input type="text" class="form-control form-control-lg" id="nome" placeholder="Nome completo">
            </div>
            <div class="mb-3 row">
                <input type="email" class="form-control form-control-lg" id="email" placeholder="Seu melhor e-mail">
            </div>
            <div class="mb-3 row">
                <input type="text" class="form-control form-control-lg" id="telefone"
                    data-inputmask="'mask': '(99) 99999-9999'" placeholder="Anote aqui o seu número de WhatsApp">
            </div>

            <div class="mb-3 row">
                <button class="btn btn-lg btn-success" onclick="garantirVaga()">
                    <h4>
                        <b>
                            GARANTA A SUA VAGA GRATUITA
                        </b>
                    </h4>
                </button>
            </div>
        </div>
        <div class="col-3"></div>
    </div>

    <div class="row justify-content-center margem-topo">
        <img class="imagem" src="{{ asset('assets/images/porta.png') }}" alt="">
    </div>

    <div class="row texto-centralizado margem-topo">
        <div class="col-1"></div>
        <div class="col-10">
            <h3>
                <b>
                    <u>
                        CONFIRA A PROGRAMAÇÃO COMPLETA:
                    </u>
                </b>
            </h3>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row texto-centralizado margem-topo">
        <div class="col-1"></div>
        <div class="col-10">
            <h5>
                <b>
                    MONTAGEM DE TORTA NA TAÇA, IDEIA INCRÍVEL PARA VOCÊ ARRASAR NO NATAL OU EM QUALQUER OCASIÃO
                </b>
            </h5>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row margem-topo margem-rodape">
        <div class="col-1"></div>
        <div class="col-10">
            <h5 class="margem-topo">
                <b>Dia 14/12</b> (terça-feira) às 20:00 - <b>Descontração da Receita da Massa e da Compota de
                    Frutas.</b>
            </h5>
            <h5 class="margem-topo">
                <b>Dia 15/12</b> (quarta-feira) às 20:00 - <b>Recheio de Creme de Ninho e Coco Cremoso.</b>
            </h5>
            <h5 class="margem-topo">
                <b>Dia 16/12</b> (quinta-feira) às 20:00 - <b>Montagem de Tortas na Taça.</b>
            </h5>
            <h5 class="margem-topo">
                Curtiu nossa programação? Então já marque na sua agenda para não perder nenhuma aula.
            </h5>
            <h5 class="margem-topo">Até lá.</h5>
            <p style="font-size: 13px"></p>
        </div>
        <div class="col-1"></div>
    </div>
    @endif

    <!-- Modal WhatsApp -->
    <div class="modal fade" id="modalWhatsApp" tabindex="-1" role="dialog" aria-labelledby="modalWhatsAppLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Obrigado!</h5>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h4>
                            <b class="margem-topo">
                                Obrigado por se cadastrar na nossa lista de espera!
                            </b>
                        </h4>
                        <h5 class="margem-topo">
                            Você gostaria de participar de um grupo exclusivo de WhatsApp onde, eventualmente, pode ser
                            divulgado vagas remanescentes, com prioridade?
                        </h5>
                        <h5 class="margem-topo">
                            <b style="color: rgb(214, 121, 0)">
                                Caso positivo, entre no grupo abaixo.
                            </b>
                        </h5>
                        <div class="row margem-topo">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <i class="bi bi-arrow-down-circle-fill"></i>
                            </div>
                            <div class="col-4"></div>
                        </div>
                        <a href="https://chat.whatsapp.com/I4Cmnzm1xaTJu3iZmzHKGU"
                            class="btn btn-lg btn-success margem-topo" role="button">
                            <h3>
                                <b>
                                    <i class="fa fa-whatsapp"></i>
                                    QUERO ENTRAR NO GRUPO VIP DO WHATSAPP!
                                </b>
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="fecharModal()">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $(":input").inputmask();
            limparCampos();         
        });
        
        function fecharModal() {
            $('#modalWhatsApp').modal('hide'); 
        }
        
        function limparCampos() {  
            $("#nome").val('')
            $("#email").val('')
            $("#telefone").val('')
        }
        
        function validarEmail(email) {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
                return (true)
            }

            return (false)
        }

        function garantirVaga(){
            let nome = $('#nome').val()
            let email = $('#email').val()
            let telefone = $('#telefone').val()
            
            let isEmailValido = validarEmail(email)

            if (nome != '' && email != '' && telefone != '' && isEmailValido) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
                return $.ajax({
                    url: '{{ route("operacao_cakes_garantir_vaga") }}',
                    type: 'POST',
                    data: {
                        nome: nome,       
                        email: email,       
                        telefone: telefone,       
                    },
                    success: function (response) {
                        if (response.status == "success" || response.status == '"success"<pre>') {
                            Swal.fire({
                                title: 'Sucesso',
                                text: 'Vaga garantida com sucesso!',
                                icon: 'success',
                                confirmButtonText: 'Fechar'
                            })
                        } else if (response.status == "warning" && response.mensagem == 'e-mail existente.') {
                            Swal.fire({
                                title: 'Sucesso',
                                text: 'Vaga garantida com sucesso!',
                                icon: 'success',
                                confirmButtonText: 'Fechar'
                            })                                             
                        }

                        setTimeout(() => {
                            $('#modalWhatsApp').modal('show');   
                        }, 3000); 

                        limparCampos();                    
                    },
                    error: function (response) {                        
                        Swal.fire({
                            title: 'Aviso!',
                            text: 'Não foi possível completar a sua solicitação no momento. Por favor, tente mais tarde!',
                            icon: 'warning',
                            confirmButtonText: 'Fechar'
                        })    
                        
                        setTimeout(() => {
                            $('#modalWhatsApp').modal('show');   
                        }, 3000);                         

                        limparCampos();
                    }
                });
            } else if (nome == '') {            
                $("#nome").focus();

                Swal.fire({
                    title: 'Aviso',
                    text: 'Informe um nome válido e tente novamente.',
                    icon: 'warning',
                    confirmButtonText: 'Fechar'
                })
            } else if (email == '' || !isEmailValido) {            
                $("#email").focus();

                Swal.fire({
                    title: 'Aviso',
                    text: 'Informe um email válido e tente novamente.',
                    icon: 'warning',
                    confirmButtonText: 'Fechar'
                })
            } else if (telefone == '') {            
                $("#telefone").focus();

                Swal.fire({
                    title: 'Aviso',
                    text: 'Informe um telefone válido e tente novamente.',
                    icon: 'warning',
                    confirmButtonText: 'Fechar'
                })
            }
        }
    </script>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTTS4TZ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- Rastreamento Active Code -->
    <script type="text/javascript">
        (function(e,t,o,n,p,r,i){e.visitorGlobalObjectAlias=n;e[e.visitorGlobalObjectAlias]=e[e.visitorGlobalObjectAlias]||function(){(e[e.visitorGlobalObjectAlias].q=e[e.visitorGlobalObjectAlias].q||[]).push(arguments)};e[e.visitorGlobalObjectAlias].l=(new Date).getTime();r=t.createElement("script");r.src=o;r.async=true;i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)})(window,document,"https://diffuser-cdn.app-us1.com/diffuser/diffuser.js","vgo");
        vgo('setAccount', '611697366');
        vgo('setTrackByDefault', true);

        vgo('process');
    </script>
    <!-- Rastreamento utm Code -->

</body>

</html>