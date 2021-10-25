@extends('layouts-blog.app')

@section('content')

<div class="row conteudo-blog">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="content">
            <h1>{{ $postagem->title }}</h1>
            <h5>Publicado em: {{ date_format($postagem->created_at, 'd/m/Y H:i:s') }}</h5>
            <h5>Atualizado em: {{ date_format($postagem->updated_at, 'd/m/Y H:i:s') }}</h5>
            <hr>
            <h4 id="body"></h4>
        </div>
    </div>
    <div class="col-2"></div>
</div>

@endsection

@push('scripts-css')
@include('blog.postagem.postagem-css')
@endpush

@push('scripts-js')
@include('blog.postagem.postagem-js')
@endpush