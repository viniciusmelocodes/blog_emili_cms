@extends('layouts-blog.app')

@section('content')

<div class="row conteudo-blog" style="padding-top: 30px; padding-bottom: 30px">
    <div class="col-3"></div>
    <div class="col-6">
        <iframe class="video-emili" height="100%" width="100%" src="https://www.youtube.com/embed/PULsV_vLGV8"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>
    <div class="col-3"></div>
</div>

@endsection

@push('scripts-css')
@include('blog.aprenda-com-a-emili.aprenda-com-a-emili-css')
@endpush

@push('scripts-js')
@include('blog.aprenda-com-a-emili.aprenda-com-a-emili-js')
@endpush