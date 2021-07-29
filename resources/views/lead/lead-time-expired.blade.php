@extends('layouts-ebook.app')

@section('content')
<div class="divContainer">
    <img class="image-background" src="{{ asset('assets/images/background.webp') }}">    
    <div class="container" id="containerPagina">
        <div class="card">
            <div class="logomarca">
                <img src="{{ asset('assets/images/logomarca.webp') }}">
            </div>    
                
            <div class="card-body">                
                <center>
                    <span id="label1">
                        <span id="textoLabel1">Tempo expirado para este link.</span>
                    </span>
                </center>
                <center>
                    <button class="btn btn-danger btn-lg" id="buttonGoHome" onclick="goHome()"><i
                            class="fa fa-fw fa-arrow-right"></i>Pegar
                        meu
                        e-book<i class="fa fa-fw fa-arrow-left"></i></button>
                </center>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts-css')
@include('lead.lead-css')
@endpush

@push('scripts-js')
@include('lead.lead-js')
@endpush