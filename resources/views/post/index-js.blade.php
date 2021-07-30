<script>
  $(document).ready( function () {
    $('#posts-datatable').DataTable({
        language: { 
            'url' : '//cdn.datatables.net/plug-ins/1.10.25/i18n/Portuguese-Brasil.json',
        },
        scrollY: 400,
        "order": [3, 'desc'],
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'title', name: 'title'},
            {data: 'slug', name: 'slug'},
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
  });

  function excluirPostagem() {

  }
</script>