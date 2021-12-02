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
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons/font/bootstrap-icons.css') }}">
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

</head>

<body>
    <div class="row justify-content-center">
        <img class="imagem" src="{{ asset('assets/images/header.png') }}" alt="">
    </div>

    <div class="row texto-centralizado">
        <div class="col-3"></div>
        <div class="col-6">
            <h3>
                <b>VENHA PARTICIPAR COMIGO DURANTE 3 DIAS DE UMA MARATONA DE LIVES</b>
            </h3>
            <h5>
                Se você está pronta para viver uma vida que sempre quis e quer ter mais tempo e dinheiro para você e
                sua
                família, então venha comigo nessa jornada!
            </h5>
        </div>
        <div class="col-3"></div>
    </div>

    <div class="row texto-centralizado margem-topo">
        <div class="col-3"></div>
        <div class="col-6">
            <iframe class="video-emili" height="100%" width="100%" src="https://www.youtube.com/embed/MyOdy5HTts4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
        <div class="col-3"></div>
    </div>

    <div class="row margem-topo margem-topo">
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
                    <h4>
                        <b>
                            GARANTA A SUA VAGA GRATUITA
                        </b>
                    </h4>
                </button>
            </div>
        </div>
        <div class="col-4"></div>
    </div>

    <div class="row justify-content-center margem-topo">
        <img class="imagem" src="{{ asset('assets/images/porta.png') }}" alt="">
    </div>

    <div class="row texto-centralizado margem-topo">
        <div class="col-3"></div>
        <div class="col-6">
            <h3>
                <b>
                    <u>
                        CONFIRA A PROGRAMAÇÃO COMPLETA:
                    </u>
                </b>
            </h3>
        </div>
        <div class="col-3"></div>
    </div>

    <div class="row texto-centralizado margem-topo">
        <div class="col-3"></div>
        <div class="col-6">
            <h5>
                <b>
                    MONTAGEM DE TORTA NA TAÇA, IDEIA INCRÍVEL PARA VOCÊ ARRASAR NO NATAL OU EM QUALQUER OCASIÃO
                </b>
            </h5>
        </div>
        <div class="col-3"></div>
    </div>

    <div class="row margem-topo">
        <div class="col-3"></div>
        <div class="col-6">
            <p>
                <b>Dia 14/12</b> (terça-feira) às 20:00 - <b>Descontração da Receita da Massa e da Compota de
                    Frutas.</b>
            </p>
            <p>
                <b>Dia 15/12</b> (quarta-feira) às 20:00 - <b>Recheio de Creme de Ninho e Coco Cremoso.</b>
            </p>
            <p>
                <b>Dia 16/12</b> (quinta-feira) às 20:00 - <b>Montagem de Tortas na Taça.</b>
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

    <div class="row justify-content-center margem-topo margem-rodape">
        <img class="imagem" src="{{ asset('assets/images/tacas.jpg') }}" alt="">
    </div>

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
                            class="btn btn-lg btn-outline-warning margem-topo" role="button">
                            <h3>
                                <b>
                                    <i class="fa fa-whatsapp"></i>
                                    Quero entrar no grupo VIP do WhatsApp!
                                </b>
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $(":input").inputmask();
            limparCampos();   
            // $('#modalWhatsApp').modal('show');       
        });
        
        function limparCampos() {  
            $("#nome").val('')
            $("#email").val('')
            $("#telefone").val('')
        }

        function garantirVaga(){
            let nome = $('#nome').val()
            let email = $('#email').val()
            let telefone = $('#telefone').val()

            if (nome != '' && email != '' && telefone != '') {
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
                                text: 'Anteriormente a sua vaga já foi garantida com a gente!',
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