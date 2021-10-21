<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ) )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( error => {
			console.error( 'There was a problem initializing the editor.', error );
		} );

	// $('form').on('submit', function (element) {
	// 	let conteudoPostagem = $(".ck-content")[0].innerHTML
	// 	$("#textoPostagem").val(conteudoPostagem);
	// });

	function salvar() {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		let body = $(".ck-content")[0].innerHTML
		let data = {'title': $("#title").val(), 'slug': $("#slug").val(), 'body': body}

		$.ajax({
			type: "POST",
			url: "{{ route('post-store') }}",
			data: data,
			success: function(response)
			{
				console.log(response)
			},
			error: function (response)
			{
				console.log(response)
			}
		});
	}
</script>