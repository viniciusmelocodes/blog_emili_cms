@extends('layouts-ebook.app')

@section('content')
<div class="divContainer">
    <img class="image-background" src="https://i.ibb.co/ZS7yp4b/background-ebook.webp">    
    <div class="container" id="containerPagina">
        <div class="card">
            <div class="logomarca">
                <img src="https://i.ibb.co/RpSct7y/logomarca.webp">
            </div>    
                
            <div class="card-body">                
                <center>
                    <span id="label1">
                        <strong>⇊⇊</strong>
                        <span id="textoLabel1">Cadastre-se abaixo para pegar seu e-book!</span>
                        <strong>⇊⇊</strong>
                    </span>
                </center>
                <form>
                    <div class="form-group row">
                        <label id="labelNomeCompleto" for="nome_completo" class="col-xl-2 col-md-4 col-lg-3 col-sm-2 col-form-label">Nome
                            Completo</label>
                        <div class="col-xl-10 col-md-8 col-lg-9 col-sm-10">
                            <input type="text" class="form-control form-control-lg" id="nome" name="nome"
                                placeholder="Seu Nome Completo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label id="labelEmail" for="email" class="col-xl-2 col-md-4 col-lg-3 col-sm-2 col-form-label">E-mail</label>
                        <div class="col-xl-10 col-md-8 col-lg-9 col-sm-10">
                            <input type="text" class="form-control form-control-lg" id="email" name="email"
                                placeholder="Seu E-mail">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label id="labelNumeroWhatsapp" for="numero_whatsapp" class="col-xl-2 col-md-4 col-lg-3 col-sm-2 col-form-label">Nº
                            WhatsApp</label>
                        <div class="col-xl-10 col-md-8 col-lg-9 col-sm-10">
                            <input type="text" class="form-control form-control-lg" id="telefone" name="telefone"
                                placeholder="Seu Nº de WhatsApp">
                        </div>
                    </div>
                    <center id="hcaptcha">

                    </center>
                </form>
                <center>
                    <button class="btn btn-danger btn-lg" id="buttonPegarMeuEbook" onclick="pegarMeuEbook()">
                        <i class="fa fa-fw fa-arrow-right"></i>Pegar meu e-book<i class="fa fa-fw fa-arrow-left"></i>
                    </button>
                </center>
                <center>
                    <p id="label2">Também não gostamos de spam!</p>
                </center>
                <center>
                    <a class="btn btn-primary btn-lg" target="_blank" href="https://chat.whatsapp.com/I4Cmnzm1xaTJu3iZmzHKGU" role="button"><i class="fa fa-whatsapp"></i> Entrar no Grupo de Confeitaria da Emili Ananias</a>
                </center>
            </div>
        </div>
    </div>
</div>

@include('lead.modal-loading')
@endsection

@push('scripts-css')
    @include('lead.lead-css')
@endpush

@push('scripts-js')
    @include('lead.lead-js')
@endpush