<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ) )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( error => {
			toastr.error( 'Erro ao inicializar o editor de texto ckeditor. Detalhe: ' + error);
		} );

	function salvar() {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		let title = $("#title").val()
		let slug = $("#slug").val()
		let body = $(".ck-content")[0].innerHTML

		if (title == '' || title == undefined || title.length < 5 || title.length > 100) {
			toastr.warning("Título inválido.")
			$("#title").focus()
			return false
		}

		if (slug == '' || slug == undefined || slug.length < 5 || slug.length > 15) {
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
			type: "POST",
			url: "{{ route('post-store') }}",
			data: data,
			success: function(response)
			{
				toastr.success(response)
			},
			error: function (response)
			{
				toastr.error(response)
			}
		});
	}
</script>