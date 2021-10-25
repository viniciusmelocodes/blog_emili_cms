<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ) )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( error => {
			toastr.error( 'Erro ao inicializar o editor de texto ckeditor. Detalhe: ' + error);
		} );

    // $(function() {

    // })

    function salvar() {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		let title = $("#title").val()
		
		// Slug
		let slug = $("#slug").val()
		slug = formatSlug(slug)

		let body = $(".ck-content")[0].innerHTML

		if (title == '' || title == undefined || title.length < 5 || title.length > 100) {
			toastr.warning("Título inválido.")
			$("#title").focus()
			return false
		}

		if (slug == '' || slug == undefined || slug.length < 5 || slug.length > 70) {
			toastr.warning("Slug inválido.")
			$("#slug").focus()
			return false
		}

		if (body == '<p><br data-cke-filler=\"true\"></p>' || body == undefined || body.length < 12 || body.length > 8000) {
			toastr.warning("Texto inválido.")
			$(".ck-content").focus()
			return false
		}

		let data = {'title': title, 'slug': slug, 'body': body}

		$.ajax({
			type: "PUT",
			url: "{{ route('post-update', $post->id) }}",
			data: data,
			success: function(response)
			{
				toastr.success(response)
				
				setTimeout(() => {
					window.location.href = '/postagens'
				}, 3000);
			},
			error: function (response)
			{
				toastr.error(response)
			}
		});
	}
</script>