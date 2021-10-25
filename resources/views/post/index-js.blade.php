<script>
  $(document).ready( function () {
    $('#posts-tabela').DataTable({
        language: { 
            'url' : '{{ asset('assets/datatables.net/plug-ins/pt_br.json') }}',
        },
        scrollY: 400,
        "order": [3, 'desc'],
        columns: [            
            {data: 'slug', name: 'slug'},
            {data: 'title', name: 'title'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
      });
  })

  function desativarPostagem(postagem, id) {
    Swal.fire({
            title: 'Deseja desativar a postagem ' + postagem + '?',
            text: "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirmar'
        }).then((result) => {
            if (result.isConfirmed) {
                @if (isset($post)) 
                  $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                  });

                  $.ajax({
                    type: "GET",
                    url: "{{ route('post-desativar') }}",
                    data: {'id': id},
                    success: function(response)
                    {
                      Swal.fire(
                        'Sucesso!',
                        'Postagem desativada com sucesso.',
                        'success'
                      )
                      setTimeout(() => {
                        window.location.href = '/postagens'
                      }, 3000);
                    },
                    error: function (response)
                    {
                      Swal.fire(
                        'Erro!',
                        'Erro ao desativar postagem. Detalhe: ' + response,
                        'error'
                      )
                    }
                  });
                @endif                
            }
        })
  }
</script>