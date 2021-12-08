<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de vendas do curso de bolo gelado | Compre agora | Emili Ananias Confeitaria</title>

    <link rel="shortcut icon" href="{{ asset('assets/icon/favicon.ico') }}" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style-pagina-vendas.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

    <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/js-pagina-vendas.js') }}">
    </script>

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

</head>

<body>
    <div id="scrolltotop_parent">
        <div tabindex="0" id="scrolltotop_arrow">
        </div>
    </div>
    <center>
        {{-- Primeiro quadro --}}
        <div class="primeiro-quadro">
            <div class="container">
                <p class="texto-padrao-grande">
                    <b>
                        APRENDA O PASSO-A-PASSO COMPLETO PARA VOCÊ DOMINAR E
                        CRIAR BOLOS
                        GELADOS INCRÍVEIS E AINDA
                        FATURAR ATÉ
                        R$ 5 MIL POR MÊS!
                    </b>
                </p>
            </div>
            <iframe class="video-emili" height="100%" width="100%" src="https://www.youtube.com/embed/29jKgI0ghBk"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
            <p class="texto-padrao-medio">
                <b>
                    COMECE A TER RENDA EXTRA AGORA
                </b>
            </p>
            <p>
                <button type="button" class="btn btn-lg btn-primary" onclick="goCheckout()">
                    <strong>
                        QUERO GARANTIR A MINHA VAGA AGORA
                    </strong>
                    <h2>
                        <i class="bi bi-cart4"></i>
                    </h2>
                </button>
            </p>
        </div>

        {{-- Segundo quadro --}}
        <div class="segundo-quadro">
            <div class="container linha-margem">
                <p class="texto-padrao-grande">
                    <b>
                        DESCUBRA AS ESTRATÉGIAS INICIAIS QUE EU USEI PARA SAIR DO ABSOLUTO ZERO E ME TORNAR UMA
                        EMPREENDEDORA
                    </b>
                </p>
            </div>
            <p class=texto-padrao-grande>
                VEJA O QUE VOCÊ VAI RECEBER:
            </p>
            <div class="container linha-margem">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="borda-topo sombra voce-vai-receber">
                            <img class="icone-1" src="https://i.ibb.co/zfnwkVL/icone-1.png">
                            <p>
                                Todas as técnicas, da massa até a finalização, para preparar 8 tipos de bolos
                                gelados
                                deliciosos, mesmo que você ainda esteja iniciando na confeitaria.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="borda-topo sombra voce-vai-receber">
                            <img class="icone-2" src="https://i.ibb.co/r0B9BHQ/icone-2.png">
                            <p>
                                Curso com apostila disponível para download, com o passo-a-passo para te ajudar a
                                acompanhar
                                cada aula.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="borda-topo sombra voce-vai-receber">
                            <img class="icone-3" src="https://i.ibb.co/RzvRMv8/icone-3.png">
                            <p>
                                Poder assistir quantas vezes forem necessárias, tudo no seu tempo e programação. Teste
                                as
                                receitas, faça e refaça até chegar a perfeição!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <p class=texto-padrao-grande>
                SERVE PARA VOCÊ QUE:
            </p>

            <div class="container linha-margem">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="borda-topo sombra serve-para-voce-que">
                            <img class="icone-4" src="https://i.ibb.co/NYcyCHV/icone-4.png">
                            <p>
                                Quer iniciar na confeitaria, mas não sabe por onde começar?
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="borda-topo sombra serve-para-voce-que">
                            <img class="icone-4" src="https://i.ibb.co/NYcyCHV/icone-4.png">
                            <p>
                                Você que é iniciante e não sabe como melhorar seus bolos?
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="borda-topo sombra serve-para-voce-que">
                            <img class="icone-4" src="https://i.ibb.co/NYcyCHV/icone-4.png">
                            <p>
                                Quer aprender uma nova profissão e não depender de um trabalho convencional?
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container linha-margem linha-margem-rodape">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="borda-topo sombra serve-para-voce-que">
                            <img class="icone-4" src="https://i.ibb.co/NYcyCHV/icone-4.png">
                            <p>
                                Quer fazer algo que ama e transformar isso em um negócio muito lucrativo?
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="borda-topo sombra serve-para-voce-que">
                            <img class="icone-4" src="https://i.ibb.co/NYcyCHV/icone-4.png">
                            <p>
                                Quer trabalhar de casa e poder passar mais tempo com a sua família?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if ($isPhone)
        {{-- Terceiro quadro --}}
        <div class="terceiro-quadro">
            <p class=texto-padrao-grande>
                <strong>
                    VEJAS AS RECEITAS QUE VOCÊ VAI APRENDER:
                </strong>
            </p>

            <div class="texto-padrao-medio">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5">
                        <p class="texto-alinhamento-esquerda">
                            <img class="imagem-secao-veja-receitas-phone" src="https://i.ibb.co/0nf3yV9/icone-5.png">
                            Brigadeiro com
                            <br>
                            Leite em pó
                        </p>
                    </div>

                    <div class="col-5">
                        <p class="texto-alinhamento-esquerda">
                            <img class="imagem-secao-veja-receitas-phone" src="https://i.ibb.co/0nf3yV9/icone-5.png">
                            Coco com Abacaxi
                        </p>
                    </div>
                    <div class="col-1"></div>
                </div>

                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5">
                        <p class="texto-alinhamento-esquerda">
                            <img class="imagem-secao-veja-receitas-phone" src="https://i.ibb.co/0nf3yV9/icone-5.png">
                            Prestígio
                        </p>
                    </div>

                    <div class="col-5">
                        <p class="texto-alinhamento-esquerda">
                            <img class="imagem-secao-veja-receitas-phone" src="https://i.ibb.co/0nf3yV9/icone-5.png">
                            Damasco
                        </p>
                    </div>
                    <div class="col-1"></div>
                </div>

                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5">
                        <p class="texto-alinhamento-esquerda">
                            <img class="imagem-secao-veja-receitas-phone" src="https://i.ibb.co/0nf3yV9/icone-5.png">
                            Red Velvet
                        </p>
                    </div>

                    <div class="col-5">
                        <p class="texto-alinhamento-esquerda">
                            <img class="imagem-secao-veja-receitas-phone" src="https://i.ibb.co/0nf3yV9/icone-5.png">
                            Leite em pó com Oreo
                        </p>
                    </div>
                    <div class="col-1"></div>
                </div>

                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5">
                        <p class="texto-alinhamento-esquerda">
                            <img class="imagem-secao-veja-receitas-phone" src="https://i.ibb.co/0nf3yV9/icone-5.png">
                            Coco com Ameixa
                        </p>
                    </div>

                    <div class="col-5">
                        <p class="texto-alinhamento-esquerda">
                            <img class="imagem-secao-veja-receitas-phone" src="https://i.ibb.co/0nf3yV9/icone-5.png">
                            Bombom
                        </p>
                    </div>
                    <div class="col-1"></div>
                </div>

            </div>

            <p class="texto-vermelho-grande">
                <strong>
                    + BÔNUS
                </strong>
            </p>
            <P class="texto-padrao-medio">
                <strong>
                    EXCLUSIVOS DO NOSSO CURSO
                </strong>
            </P>
            <div class="container secao-bonus">
                <div class="row linha-bonus">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 bonus">
                        <div class="bonus-texto">
                            <img class="imagem-secao-bonus" src="https://i.ibb.co/x1xmqGm/icone-bonus-1.png">
                            <p class="bonus-titulo-texto-explicativo">
                                <strong>
                                    MENTORIA COM OS ALUNOS
                                </strong>
                            </p>
                            <p class="bonus-texto-explicativo">
                                Duas horas de Mentoria em grupo e ao vivo, para os alunos tirarem todas as dúvidas que
                                quiserem com a Emili Ananias.
                                <br><del><strong>R$ 200,00</strong></del>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 bonus">
                        <div class="bonus-texto">
                            <img class="imagem-secao-bonus" src="https://i.ibb.co/pfxTC2y/icone-bonus-2.png">
                            <p class="bonus-titulo-texto-explicativo">
                                <strong>
                                    GRUPO COM OS ALUNOS
                                    <br>
                                    NO WHATSAPP
                                </strong>
                            </p>
                            <p class="bonus-texto-explicativo">
                                Grupo no WhatsApp para tirar todas as dúvidas que os alunos tiverem. Sempre que a
                                professora puder ela entrará no grupo e respondera as dúvidas. <br><del><strong>R$
                                        250,00</strong></del>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else

        {{-- Terceiro quadro --}}
        <div class="terceiro-quadro">
            <p class=texto-padrao-grande>
                <strong>
                    VEJAS AS RECEITAS QUE VOCÊ VAI APRENDER:
                </strong>
            </p>

            <div class="texto-padrao-medio">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5">
                        <p class="texto-alinhamento-esquerda">
                            <img class="imagem-secao-veja-receitas" src="https://i.ibb.co/0nf3yV9/icone-5.png">
                            Brigadeiro com Leite em pó
                        </p>
                    </div>

                    <div class="col-5">
                        <p class="texto-alinhamento-esquerda">
                            <img class="imagem-secao-veja-receitas" src="https://i.ibb.co/0nf3yV9/icone-5.png">
                            Coco com Abacaxi
                        </p>
                    </div>
                    <div class="col-1"></div>
                </div>

                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5">
                        <p class="texto-alinhamento-esquerda">
                            <img class="imagem-secao-veja-receitas" src="https://i.ibb.co/0nf3yV9/icone-5.png">
                            Prestígio
                        </p>
                    </div>

                    <div class="col-5">
                        <p class="texto-alinhamento-esquerda">
                            <img class="imagem-secao-veja-receitas" src="https://i.ibb.co/0nf3yV9/icone-5.png">
                            Damasco
                        </p>
                    </div>
                    <div class="col-1"></div>
                </div>

                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5">
                        <p class="texto-alinhamento-esquerda">
                            <img class="imagem-secao-veja-receitas" src="https://i.ibb.co/0nf3yV9/icone-5.png">
                            Red Velvet
                        </p>
                    </div>

                    <div class="col-5">
                        <p class="texto-alinhamento-esquerda">
                            <img class="imagem-secao-veja-receitas" src="https://i.ibb.co/0nf3yV9/icone-5.png">
                            Leite em pó com Oreo
                        </p>
                    </div>
                    <div class="col-1"></div>
                </div>

                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5">
                        <p class="texto-alinhamento-esquerda">
                            <img class="imagem-secao-veja-receitas" src="https://i.ibb.co/0nf3yV9/icone-5.png">
                            Coco com Ameixa
                        </p>
                    </div>

                    <div class="col-5">
                        <p class="texto-alinhamento-esquerda">
                            <img class="imagem-secao-veja-receitas" src="https://i.ibb.co/0nf3yV9/icone-5.png">
                            Bombom
                        </p>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>

            <p class="texto-vermelho-grande">
                <strong>
                    + BÔNUS
                </strong>
            </p>
            <P class="texto-padrao-medio">
                <strong>
                    EXCLUSIVOS DO NOSSO CURSO
                </strong>
            </P>
            <div class="container secao-bonus">
                <div class="row linha-bonus">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 bonus">
                        <div class="bonus-texto">
                            <img class="imagem-secao-bonus" src="https://i.ibb.co/x1xmqGm/icone-bonus-1.png">
                            <p class="bonus-titulo-texto-explicativo">
                                <strong>
                                    MENTORIA COM OS ALUNOS
                                </strong>
                            </p>
                            <p class="bonus-texto-explicativo">
                                Duas horas de Mentoria em grupo e ao vivo, para os alunos tirarem todas as dúvidas que
                                quiserem com a Emili Ananias.
                                <br><del><strong>R$ 200,00</strong></del>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 bonus">
                        <div class="bonus-texto">
                            <img class="imagem-secao-bonus" src="https://i.ibb.co/pfxTC2y/icone-bonus-2.png">
                            <p class="bonus-titulo-texto-explicativo">
                                <strong>
                                    GRUPO COM OS ALUNOS
                                    <br>
                                    NO WHATSAPP
                                </strong>
                            </p>
                            <p class="bonus-texto-explicativo">
                                Grupo no WhatsApp para tirar todas as dúvidas que os alunos tiverem. Sempre que a
                                professora puder ela entrará no grupo e respondera as dúvidas. <br><del><strong>R$
                                        250,00</strong></del>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endif

        {{-- Quarto quadro --}}
        <div class="quarto-quadro">
            <p class="texto-padrao-grande">
                <strong>
                    CONDIÇÃO ESPECIAL COM TUDO INCLUSO
                </strong>
            </p>

            <div class="container linha-margem">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="borda-topo sombra condicao-especial-tudo-incluso">
                            <img class="icone-7" src="https://i.ibb.co/xKvSrH0/icone-7.png">
                            <p class="texto-padrao-medio">
                                <strong>
                                    GARANTIA DE 7 DIAS
                                </strong>
                            </p>
                            <p>
                                Se achou que o curso não é para você, devolvemos o valor investido sem nenhuma
                                burocracia.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="borda-topo sombra condicao-especial-tudo-incluso">
                            <img class="icone-8" src="https://i.ibb.co/L5TR5qd/icone-8.png">
                            <p class="texto-padrao-medio">
                                <strong>
                                    ACESSO VITALÍCIO
                                </strong>
                            </p>
                            <p>
                                Acesso vitalício para estudar onde e quando quiser, além de atualizações periódicas
                                garantidas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container linha-margem">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="borda-topo sombra condicao-especial-tudo-incluso">
                            <img class="icone-9" src="https://i.ibb.co/175JSvD/icone-9.png">
                            <p class="texto-padrao-medio">
                                <strong>
                                    RESULTADO RÁPIDO
                                </strong>
                            </p>
                            <p>
                                Curso feito para quem quer ser prático. Aprender e colocar em prática para logo ter
                                resultados.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="borda-topo sombra condicao-especial-tudo-incluso">
                            <img class="icone-10" src="https://i.ibb.co/RpPJcX9/icone-10.png">
                            <p class="texto-padrao-medio">
                                <strong>
                                    CURSO COM CERTIFICADO
                                </strong>
                            </p>
                            <p>
                                Os alunos que concluírem todas as aulas do treinamento irão receber um certificado de
                                conclusão de curso.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Quinto quadro --}}
        <div class="quinto-quadro">
            <div class="row">
                <div class="col-12">
                    <img class="icone-11" src="https://i.ibb.co/W2LQgvh/icone-11.png">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <img class="icone-12" src="https://i.ibb.co/K7W9Z8D/icone-12.webp">
                </div>
            </div>

            <p>
                <button type="button" class="btn btn-lg btn-primary" onclick="goCheckout()">
                    <strong>
                        QUERO GARANTIR A MINHA VAGA AGORA
                    </strong>
                    <h2>
                        <i class="bi bi-cart4"></i>
                    </h2>
                </button>
            </p>
        </div>

        {{-- Sexto quadro --}}
        <div class="sexto-quadro">
            <div class="container">
                <p class="texto-padrao-grande linha-margem-rodape texto-vermelho">
                    <strong>
                        SOBRE EMILI ANANIAS
                    </strong>
                </p>
                <p class="texto-alinhamento-justificado texto-sobre-emili">
                    Moradora de Goiânia-GO, tenho 33 anos, empresária, casada, mãe de duas lindas princesas.
                    Formada
                    em administração de empresas, trabalhei muitos anos em empresas privadas na modalidade CLT, mas
                    sempre fui apaixonada pela cozinha, com ênfase à confeitaria. Desde pequena, ainda quando eu morava
                    no
                    município de Caiapônia-GO, ia passear na casa da minha madrinha e lá ficava encantada com os
                    bolos maravilhosos e deliciosos que ela fazia. Daí eu ficava sonhando... "Um dia serei uma
                    boleira de mãos cheias como ela...". A minha história com a confeitaria começou quando eu tive
                    minha
                    primeira filha e resolvi sair do trabalho pra cuidar dela em casa. Foi quando a minha chave
                    virou e pensei: "Vou começar a fazer bolos para vender. Gosto muito da confeitaria. Vou
                    misturar
                    o amor com o dom e fazer disso uma renda profissional."
                </p>
                <p class="texto-alinhamento-justificado texto-sobre-emili">
                    Então, em março de 2010 comecei a empreender no ramo da confeitaria. Minha empresa EMILI ANANIAS
                    CONFEITARIA está no mercado há mais de 10 anos, com cerca de 9.600 clientes atendidos e mais
                    de
                    300 alunos profissionalizados em chocolataria e confeitaria. Além do ateliê físico em
                    Goiânia,
                    estamos migrando também para área virtual para conseguir atender muito mais pessoas. Somos
                    uma
                    empresa de fabricação, vendas e escola de confeitaria com cursos práticos e demonstrativos
                    que
                    acontecem diariamente, e agora, conta também com cursos virtuais com a mesma qualidade dos
                    cursos presenciais e receitas testadas e aprovadas em sala de aula por mais de 300 alunos.
                </p>

                <img class="icone-13" src="https://i.ibb.co/7J0FZzn/icone-13.png">
            </div>
        </div>
        </div>

        {{-- Sétimo quadro --}}
        <div class="setimo-quadro">
            <p class="texto-alinhamento-centralizado texto-padrao-grande linha-margem-rodape">
                <strong>
                    DEPOIMENTOS DE ALUNOS
                </strong>
            </p>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <p>
                            <iframe class="videos-depoimentos" height="100%" width="100%"
                                src="https://www.youtube.com/embed/gf3csnK5cHE" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </p>
                        <p>
                            <iframe class="videos-depoimentos" height="100%" width="100%"
                                src="https://www.youtube.com/embed/9IgoYjnToLw" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <p>
                            <iframe class="videos-depoimentos" height="100%" width="100%"
                                src="https://www.youtube.com/embed/CIEvXoVa6fk" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </p>
                        <p>
                            <iframe class="videos-depoimentos" height="100%" width="100%"
                                src="https://www.youtube.com/embed/8a-OPqhzbIU" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Oitavo quadro --}}
        <div class="oitavo-quadro">
            <p class="texto-alinhamento-centralizado texto-padrao-medio linha-margem-rodape texto-vermelho">
                <strong>
                    AVISO LEGAL
                </strong>
            </p>
            <div class="container">
                <p class="texto-alinhamento-justificado texto-padrao-pequeno">
                    Os produtos e serviços vendidos neste site não devem ser interpretados como uma promessa ou garantia
                    de
                    resultados. Seu nível de sucesso em alcançar os resultados divulgados com o uso de nossos produtos e
                    informações depende do tempo que você dedica a aplicação do método, técnicas utilizadas,
                    conhecimento e
                    habilidades diferentes. Como esses fatores diferem entre cada indivíduo, não podemos garantir o
                    sucesso
                    ou o nível de resultado, nem somos responsáveis por qualquer de suas ações. Todas e quaisquer
                    declarações prospectivas contidas neste site ou em qualquer um de nossos produtos destinam-se a
                    expressar a nossa opinião sobre os resultados potenciais que algumas pessoas podem alcançar.
                </p>
                <img class="icone-14" src="https://i.ibb.co/tC0ktLd/icone-14.png" onclick="goIGMoonlanderDigital()">
            </div>
        </div>
    </center>

    <span id="toTopBtn">
        <h1>
            <i class="bi bi-arrow-up-square-fill"></i>
        </h1>
    </span>

    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 20) {
                    $('#toTopBtn').fadeIn();
                } else {
                    $('#toTopBtn').fadeOut();
                }
            });

            $('#toTopBtn').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 1000);
                return false;
            });
        }); 
    </script>
</body>

</html>