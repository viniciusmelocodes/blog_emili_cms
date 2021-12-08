<script type="text/javascript" defer>
    $(document).ready(function() {
        limparCampos();        
    });
    
    function limparCampos() {  
        $("#nome").val('')
        $("#email").val('')
        $("#telefone").val('')
    }

    function goHome() {
        window.location.href = 'https://emiliananiasconfeitaria.com.br/receitas-doces';
    }

    function goPdfEbook(email) {
        window.open('https://emiliananiasconfeitaria.com.br/receitas-doces/meuebook/' + email, '_blank');
    }

    function validarEmail(email) {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
            return (true)
        }

        return (false)
    }

    const isNumericInput = (event) => {
        const key = event.keyCode;
        return ((key >= 48 && key <= 57) || // Allow number line
            (key >= 96 && key <= 105) // Allow number pad
            );
    };

    const isModifierKey = (event) => {
        const key = event.keyCode;
        return (event.shiftKey === true || key === 35 || key === 36) || // Allow Shift, Home, End
            (key === 8 || key === 9 || key === 13 || key === 46) || // Allow Backspace, Tab, Enter, Delete
            (key > 36 && key < 41) || // Allow left, up, right, down
            (
                // Allow Ctrl/Command + A,C,V,X,Z
                (event.ctrlKey === true || event.metaKey === true) &&
                (key === 65 || key === 67 || key === 86 || key === 88 || key === 90)
            )
    };

    const enforceFormat = (event) => {
        // Input must be of a valid number format or a modifier key, and not longer than ten digits
        if(!isNumericInput(event) && !isModifierKey(event)){
            event.preventDefault();
        }
    };

    const formatToPhone = (event) => {
        if(isModifierKey(event)) {return;}

        const input = event.target.value.replace(/\D/g,'').substring(0,11); // First ten digits of input only
        const areaCode = input.substring(0,2);
        const middle = input.substring(2,7);
        const last = input.substring(7,11);

        if(input.length > 7) {
            event.target.value = `(${areaCode}) ${middle}-${last}`;
        } else if(input.length > 2) {
            event.target.value = `(${areaCode}) ${middle}`;
        } else if(input.length > 0) {
            event.target.value = `(${areaCode}`;
        }
    };

    const inputElement = document.getElementById('telefone');
    inputElement.addEventListener('keydown',enforceFormat);
    inputElement.addEventListener('keyup',formatToPhone);

    function pegarMeuEbook() {
        let nome = $('#nome').val();
        let email = $('#email').val();
        let telefone = $('#telefone').val();
        
        let isEmailValido = validarEmail(email)

        if (nome != '' && email != '' && telefone != '' && isEmailValido) {
             $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            $('#modalLoading').modal('show');

            return $.ajax({
                    url: '{{route("lead_liberar_ebook")}}',
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