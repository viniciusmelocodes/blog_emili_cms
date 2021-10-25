@extends('layouts-blog.app')

@section('content')

<div class="row conteudo-blog" style="padding-top: 30px; padding-bottom: 30px">
    <div class="col-2"></div>
    <div class="col-8">
        <h2>Posts mais recentes:</h2>
        {{-- <img id="icone-sobre-emili" src="{{ asset('assets/images/sobre-emili.webp') }} "> --}}
        @foreach ($postagens as $postagem)
            <div class="card" style="margin-bottom: 30px">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="/{{ $postagem->slug }}">
                            {{ $postagem->title }}
                        </a>
                    </h5>
                    <p class="card-text">
                        Publicado em: {{ date_format($postagem->created_at, 'd/m/Y H:i:s') }} 
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="col-2"></div>
    <div class="container">

    </div>
</div>

@endsection

@push('scripts-css')
@include('blog.inicio.inicio-css')
@endpush

@push('scripts-js')
@include('blog.inicio.inicio-js')
@endpush