@extends('layouts-blog.app')

@section('content')

<div class="row conteudo-blog" style="padding-top: 30px; padding-bottom: 30px">
    <div class="col-3"></div>
    <div class="col-6">
        <center>
            <h3>Sobre Emili</h3>
            <img id="icone-sobre-emili" src="{{ asset('assets/images/sobre-emili.webp') }}" width="40%">
        </center>
    </div>
    <div class="col-3"></div>
</div>

@endsection

@push('scripts-css')
@include('blog.sobre-emili.sobre-emili-css')
@endpush

@push('scripts-js')
@include('blog.sobre-emili.sobre-emili-js')
@endpush