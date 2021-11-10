<script type="text/javascript" defer>
    $(document).ready(function() {
        document.title = '{!! $titlePageNavigator !!}'
    });

    function irPraHome() {
        window.location.href = '/';
    }

    function enviarEncomenda() {
        $.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		let nome = $("#nome").val()
		let email = $("#email").val()
		let telefone = $("#telefone").val()
		let formaPagamento = $("#forma_pagamento").val()
		let pedido = $("#pedido").val()

		if (nome == '' || nome == undefined || nome.length < 5) {
			Swal.fire('Atenção!', "Nome Completo inválido.", 'warning')
			$("#nome").focus()
			return false
		}

		if (email == '' || email == undefined || email.length < 5) {
			Swal.fire('Atenção!', "E-mail inválido.", 'warning')
			$("#email").focus()
			return false
		}

		if (telefone == '' || telefone == undefined || telefone.length < 5) {
			Swal.fire('Atenção!', "Nº WhatsApp inválido.", 'warning')
			$("#telefone").focus()
			return false
		}

		if (formaPagamento == '' || formaPagamento == undefined || formaPagamento.length < 3) {
			Swal.fire('Atenção!', "Forma de Pagamento inválida.", 'warning')
			$("#formaPagamento").focus()
			return false
		}

		if (pedido == '' || pedido == undefined || pedido.length < 5) {
			Swal.fire('Atenção!', "Detalhes de pedido inválido.", 'warning')
			$("#pedido").focus()
			return false
		}

		let data = {'nome': nome, 'email': email, 'telefone': telefone, 'formaPagamento': formaPagamento, 'pedido': pedido}

		$.ajax({
			type: "POST",
			url: "{{ route('enviar-pedido-encomenda') }}",
			data: data,
			success: function(response)
			{
				Swal.fire(
                    'Emili Ananias acaba de receber o seu pedido',
                    response,
                    'success'
                )

				setTimeout(() => {
					window.location.href = '/fazer-encomenda'
				}, 3000);
			},
			error: function (response)
			{
                Swal.fire(
                    'Erro ao enviar o seu pedido',
                    response.responseJSON.message,
                    'error'
                )
			}
		});
    }
    
</script>