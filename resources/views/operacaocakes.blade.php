<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}">

    <title>{{ $titlePageNavigator }}</title>
    <style>
        body {
            background: black;
            font-family: "Nunito";
        }

        .row {
            color: white
        }

        .texto-centralizado {
            text-align: center;
            vertical-align: middle;
        }

        .imagem {
            width: 50%
        }

        .margem-topo {
            padding-top: 30px
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

</head>

<body>
    <div class="row justify-content-center">
        <img class="imagem" src="{{ asset('assets/images/header.png') }}" alt="">
    </div>

    <div class="row texto-centralizado">
        <div class="col-3"></div>
        <div class="col-6">
            <p>VENHA PARTICIPAR COMIGO DURANTE 3 DIAS DE UMA MARATONA DE LIVES</p>
            <p>
                Se você está pronta para viver uma vida que sempre quis e quer ter mais tempo e dinheiro para você e
                sua
                família, então venha comigo nessa jornada!
            </p>
        </div>
        <div class="col-3"></div>
    </div>

    <div class="row texto-centralizado">
        <h3>Thumb da Emili aqui</h3>
    </div>

    <div class="row margem-topo">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="mb-3 row">
                <input type="text" class="form-control" id="nome" placeholder="Nome completo">
            </div>
            <div class="mb-3 row">
                <input type="email" class="form-control" id="email" placeholder="Seu melhor e-mail">
            </div>
            <div class="mb-3 row">
                <input type="text" class="form-control" id="telefone" data-inputmask="'mask': '(99) 99999-9999'"
                    placeholder="Anote aqui o seu número">
            </div>

            <div class="mb-3 row">
                <button class="btn btn-lg btn-success" onclick="garantirVaga()">
                    <h4>GARANTA A SUA VAGA GRATUITA</h4>
                </button>
            </div>
        </div>
        <div class="col-4"></div>
    </div>

    <div class="row justify-content-center margem-topo">
        <img class="imagem" src="{{ asset('assets/images/porta.jpg') }}" alt="">
    </div>

    <div class="row texto-centralizado margem-topo">
        <div class="col-3"></div>
        <div class="col-6">
            <p>CONFIRA A PROGRAMAÇÃO COMPLETA</p>
            <p>
                MONTAGEM DE TORTA NA TAÇA, IDEIA INCRIVEL PARA VOCÊ ARRASAR NO NATAL OU EM QUALQUER OCASIÃO
            </p>
        </div>
        <div class="col-3"></div>
    </div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <p>
                Dia 14/12 (terça-feira) às 20:00 - Descontração da Receita da Massa e da Compota de Frutas.
            </p>
            <p>
                Dia 15/12 (quarta-feira) às 20:00 - Recheio de Creme de Ninho e Coco Cremoso.
            </p>
            <p>
                Dia 16/12 (quinta-feira) às 20:00 - Montagem de Tortas na Taça.
            </p>
            <p>
                Curtiu nossa programação? Então já marque na sua agenda para não perder nenhuma aula.
            </p>
            <p>Até lá.</p>
            <p>Obs: Não serão disponibilizadas as receitas apresentadas na programação da Operação Cakes. Todas estarão
                disponibilizadas no curso de Bolos Gelados.</p>
        </div>
        <div class="col-3"></div>
    </div>

    <!-- Modal Loading -->
    <div class="modal fade" id="modalLoading" tabindex="-1" role="dialog" aria-labelledby="modalLoadingLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Aguarde um momento...</h5>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $(":input").inputmask();
            limparCampos();        
        });
        
        function limparCampos() {  
            $("#nome").val('')
            $("#email").val('')
            $("#telefone").val('')
        }

        function goHome() {
            window.location.href = 'https://emiliananiasconfeitaria.com.br/operacao-cakes';
        }

        function goPdfEbook(email) {
            window.open('https://emiliananiasconfeitaria.com.br/operacao-cakes/meuebook/' + email, '_blank');
        }

        function garantirVaga(){
            let nome = $('#nome')
            let email = $('#email')
            let telefone = $('#telefone')

            if (nome != '' && email != '' && telefone != '') {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
                $('#modalLoading').modal('show');

                return $.ajax({
                    url: '{{ route("lead_liberar_ebook") }}',
                    type: 'POST',
                    data: {
                        nome: nome,       
                        email: email,       
                        telefone: telefone,       
                    },
                    success: function (response) {
                        if (response.status == "success" || response.status == '"success"<pre>') {
                            Swal.fire({
                                title: 'Aviso',
                                text: "O seu e-book está liberado e estará disponível em uma nova aba/janela para download. Caso o seu navegador esteja bloqueando abertura de abas/janelas então lembre de permitir esse site. Gostaria de abrir uma nova aba/janela?",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Fazer meu download',
                                cancelButtonText: 'Cancelar'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    goPdfEbook(email);                                
                                }
                                $('#modalLoading').modal('hide');
                            });
                        } else if (response.status == "warning" || response.status == '"warning"<pre>') {
                            Swal.fire({
                                title: 'Aviso',
                                text: "O seu e-book já foi liberado anteriormente. Gostaria de uma nova liberação?",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Enviar',
                                cancelButtonText: 'Cancelar'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    return $.ajax({
                                        url: '{{route("lead_liberar_ebook_novamente")}}',
                                        type: 'POST',
                                        data: {
                                            nome: nome,       
                                            email: email,       
                                            telefone: telefone,       
                                        },
                                        success: function (response) {
                                            Swal.fire({
                                                title: 'Aviso',
                                                text: "O seu e-book está liberado e estará disponível para download em uma nova aba/janela. Caso o seu navegador esteja configurado para bloquear abertura de abas/janelas então lembre de permitir isso. Gostaria de abrir uma nova aba/janela?",
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Fazer meu download agora',
                                                cancelButtonText: 'Cancelar'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    goPdfEbook(email);                                
                                                }
                                                $('#modalLoading').modal('hide');
                                            });
                                        },
                                        error: function (response) {
                                            Swal.fire({
                                                title: 'Erro!',
                                                text: 'Comunique ao administrador sobre esse erro. Contato: viniciusldemelo@gmail.com. Detalhes: ' + response.responseJSON.message,
                                                icon: 'error',
                                                confirmButtonText: 'Fechar'
                                            })              
                                            $('#modalLoading').modal('hide');                              
                                        }
                                    });
                                } else {                                    
                                    $('#modalLoading').modal('hide');
                                }
                            })                            
                        }

                        limparCampos();                    
                    },
                    error: function (response) {
                        if (response.responseJSON != undefined) {
                            if (response.responseJSON.message == 'CSRF token mismatch.') {
                                Swal.fire({
                                    title: 'Aviso!',
                                    text: 'Atualize a página e tente novamente.',
                                    icon: 'warning',
                                    confirmButtonText: 'Fechar'
                                })
                                $('#modalLoading').modal('hide');
                            } else if (response.responseJSON[0] == 'warning') {
                                Swal.fire({
                                    title: 'Aviso!',
                                    text: response.responseJSON.mensagem,
                                    icon: 'warning',
                                    confirmButtonText: 'Fechar'
                                })    
                                $('#modalLoading').modal('hide');                            
                            }
                        } else if (response.responseText == "warning" || response.responseText == '"warning"<pre>') {
                            Swal.fire({
                                title: 'Aviso',
                                text: "O seu e-book já foi liberado anteriormente. Gostaria de uma nova liberação?",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Enviar',
                                cancelButtonText: 'Cancelar'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    return $.ajax({
                                        url: '{{route("lead_liberar_ebook_novamente")}}',
                                        type: 'POST',
                                        data: {
                                            nome: nome,       
                                            email: email,       
                                            telefone: telefone,       
                                        },
                                        success: function (response) {
                                            Swal.fire({
                                                title: 'Aviso',
                                                text: "O seu e-book está liberado e estará disponível para download em uma nova aba/janela. Caso o seu navegador esteja configurado para bloquear abertura de abas/janelas então lembre de permitir isso. Gostaria de abrir uma nova aba/janela?",
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Fazer meu download agora',
                                                cancelButtonText: 'Cancelar'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    goPdfEbook(email);                                
                                                }
                                                $('#modalLoading').modal('hide');
                                            });
                                        },
                                        error: function (response) {
                                            Swal.fire({
                                                title: 'Erro!',
                                                text: 'Comunique ao administrador sobre esse erro. Contato: viniciusldemelo@gmail.com. Detalhes: ' + response.responseJSON.detalhes,
                                                icon: 'error',
                                                confirmButtonText: 'Fechar'
                                            })      
                                            $('#modalLoading').modal('hide');                                      
                                        }
                                    });
                                }
                            })      
                        } else {
                            Swal.fire({
                                title: 'Erro!',
                                text: 'Comunique ao administrador sobre esse erro. Contato: viniciusldemelo@gmail.com. Detalhes: ' + response.responseJSON.detalhes,
                                icon: 'error',
                                confirmButtonText: 'Fechar'
                            })                    
                            $('#modalLoading').modal('hide');        
                        }

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
            } else if (email == '') {            
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

</body>

</html>