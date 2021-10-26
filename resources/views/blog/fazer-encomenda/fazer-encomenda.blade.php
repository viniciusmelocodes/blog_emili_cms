@extends('layouts-blog.app')

@section('content')

<div class="row conteudo-blog" style="padding-top: 50px">
    <div class="col-2"></div>
    <div class="col-8">
        <form>
            <div class="form-group">
                <label id="labelNomeCompleto" for="nome_completo" class="col-auto col-form-label">Nome
                    Completo</label>
                <div class="col-auto">
                    <input type="text" class="form-control form-control-lg" id="nome" name="nome"
                        placeholder="Nome completo">
                </div>
            </div>
            <div class="form-group">
                <label id="labelEmail" for="email" class="col-auto col-form-label">E-mail</label>
                <div class="col-auto">
                    <input type="text" class="form-control form-control-lg" id="email" name="email"
                        placeholder="E-mail">
                </div>
            </div>
            <div class="form-group">
                <label id="labelNumeroWhatsapp" for="numero_whatsapp" class="col-auto col-form-label">Nº
                    WhatsApp</label>
                <div class="col-auto">
                    <input type="text" class="form-control form-control-lg" id="telefone" name="telefone"
                        placeholder="Nº de WhatsApp">
                </div>
            </div>
            <div class="form-group" style="margin-bottom: 15px">
                <label class="col-auto col-form-label">Forma de Pagamento</label>
                <div class="col-auto">
                    <select class="form-control form-control-lg" id="forma_pagamento" name="forma_pagamento">
                        <option value="Cartão">Cartão</option>
                        <option value="PIX">PIX</option>
                        <option value="Dinheiro">Dinheiro</option>
                        <option value="Boleto">Boleto</option>
                    </select>
                </div>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Qual é o seu pedido?" name="pedido" id="pedido"
                    style="height: 100px"></textarea>
                <label for="floatingTextarea2">Qual é o seu pedido?</label>
            </div>
        </form>
        <center style="padding-top: 30px; padding-bottom: 50px">
            <button class="btn btn-danger btn-lg" id="buttonEnviarEncomenda" onclick="enviarEncomenda()">
                Enviar minha encomenda agora
            </button>
        </center>
    </div>
    <div class="col-2"></div>
</div>

@endsection

@push('scripts-css')
@include('blog.fazer-encomenda.fazer-encomenda-css')
@endpush

@push('scripts-js')
@include('blog.fazer-encomenda.fazer-encomenda-js')
@endpush