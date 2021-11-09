<script>
	tinymce.init({
		selector: 'textarea#tinymce',
		image_class_list: [
            {title: 'img-responsive', value: 'img-responsive'},
		],
		height: 500,
		setup: function (editor) {
			editor.on('init change', function () {
				editor.save();
			});
		},
		plugins: [
			"advlist autolink lists link image charmap print preview anchor",
			"searchreplace visualblocks code fullscreen",
			"insertdatetime media table paste"
		],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",

		image_title: true,
		automatic_uploads: true,
		images_upload_url: '{{ route('upload-imagem-postagem') }}',
		file_picker_types: 'image',
		file_picker_callback: function(cb, value, meta) {
			var input = document.createElement('input');
			input.setAttribute('type', 'file');
			input.setAttribute('accept', 'image/*');
			input.onchange = function() {
				var file = this.files[0];

				var reader = new FileReader();
				reader.readAsDataURL(file);
				reader.onload = function () {
					var id = 'blobid' + (new Date()).getTime();
					var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
					var base64 = reader.result.split(',')[1];
					var blobInfo = blobCache.create(id, file, base64);
					blobCache.add(blobInfo);
					cb(blobInfo.blobUri(), { title: file.name });
				};
			};
			input.click();
		}
	});

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

		let body = tinyMCE.get('tinymce').getContent()

		if (title == '' || title.length < 5 || title.length > 100) {
			toastr.warning("Título inválido.")
			$("#title").focus()
			return false
		}

		if (slug == '' || slug.length < 5 || slug.length > 70) {
			toastr.warning("Slug inválido.")
			$("#slug").focus()
			return false
		}

		if (body == '') {
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