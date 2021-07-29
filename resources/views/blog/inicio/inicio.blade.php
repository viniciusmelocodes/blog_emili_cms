@extends('layouts-blog.app')

@section('content')

<div class="row conteudo-blog">
    <div class="col-12">
        {{-- <img id="icone-sobre-emili" src="{{ asset('assets/images/sobre-emili.webp') }} "> --}}
        <center>
            <p class="conteudo">Conteúdos gerais</p>
        </center>
    </div>
</div>

@endsection

@push('scripts-css')
@include('blog.inicio.inicio-css')
@endpush

@push('scripts-js')
@include('blog.inicio.inicio-js')
@endpush