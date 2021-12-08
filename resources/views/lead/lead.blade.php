@extends('layouts-ebook.app')

@section('content')
@if ($isPhone)
<div class="margem-topo-pagina margem-rodape-pagina">
    <div class="container">
        <div class="card">
            <div class="row d-flex justify-content-center flex-nowrap">
                <img class="logomarca-mobile" src="{{ asset('assets/images/logomarca.webp') }}">
            </div>

            <div class="card-body">
                <h5 class="texto-centralizado">Cadastre-se abaixo para pegar seu e-book!</h5>
                <form>
                    <div class="mb-3">
                        <label id="labelNomeCompleto" for="nome_completo"
                            class="col-xl-2 col-md-4 col-lg-3 col-sm-2 col-form-label">Nome
                            Completo</label>
                        <div class="col-xl-10 col-md-8 col-lg-9 col-sm-10">
                            <input type="text" class="form-control form-control-lg" id="nome" name="nome"
                                placeholder="Seu Nome Completo">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label id="labelEmail" for="email"
                            class="col-xl-2 col-md-4 col-lg-3 col-sm-2 col-form-label">E-mail</label>
                        <div class="col-xl-10 col-md-8 col-lg-9 col-sm-10">
                            <input type="email" class="form-control form-control-lg" id="email" name="email"
                                placeholder="Seu E-mail">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label id="labelNumeroWhatsapp" for="numero_whatsapp"
                            class="col-xl-2 col-md-4 col-lg-3 col-sm-2 col-form-label">Nº
                            WhatsApp</label>
                        <div class="col-xl-10 col-md-8 col-lg-9 col-sm-10">
                            <input type="text" class="form-control form-control-lg" id="telefone" name="telefone"
                                placeholder="Seu Nº de WhatsApp">
                        </div>
                    </div>
                </form>
                <center>
                    <button class="btn btn-danger btn-lg" id="buttonPegarMeuEbook" onclick="pegarMeuEbook()">
                        <i class="fa fa-fw fa-arrow-right"></i>Pegar meu e-book<i class="fa fa-fw fa-arrow-left"></i>
                    </button>

                    <p id="label2">Também não gostamos de spam!</p>

                    <a class="btn btn-primary btn-lg" target="_blank"
                        href="https://chat.whatsapp.com/I4Cmnzm1xaTJu3iZmzHKGU" role="button"><i
                            class="fa fa-whatsapp"></i> Entrar no Grupo de Confeitaria da Emili Ananias</a>
                </center>
            </div>
        </div>
    </div>
</div>

@else

<div class="margem-topo-pagina margem-rodape-pagina">
    <div class="container">
        <div class="card">
            <div class="row d-flex justify-content-center flex-nowrap">
                <img class="logomarca" src="{{ asset('assets/images/logomarca.webp') }}">
            </div>

            <div class="card-body">
                <h5 class="texto-centralizado margem-rodape">Cadastre-se abaixo para pegar seu e-book!</h5>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control form-control-lg" id="nome" name="nome"
                                    placeholder="Seu nome completo">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control form-control-lg" id="email" name="email"
                                    placeholder="Seu melhor e-mail">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control form-control-lg" id="telefone" name="telefone"
                                    placeholder="Seu nº de WhatsApp">
                            </div>
                        </form>
                    </div>
                    <div class="col-3"></div>
                </div>
                <center>
                    <button class="btn btn-danger btn-lg" id="buttonPegarMeuEbook" onclick="pegarMeuEbook()">
                        <i class="fa fa-fw fa-arrow-right"></i>Pegar meu e-book<i class="fa fa-fw fa-arrow-left"></i>
                    </button>

                    <p id="label2">Também não gostamos de spam!</p>

                    <a class="btn btn-primary btn-lg" target="_blank"
                        href="https://chat.whatsapp.com/I4Cmnzm1xaTJu3iZmzHKGU" role="button"><i
                            class="fa fa-whatsapp"></i> Entrar no Grupo de Confeitaria da Emili Ananias</a>
                </center>
            </div>
        </div>
    </div>
</div>
@endif

@include('lead.modal-link')
@endsection

@push('scripts-css')
@include('lead.lead-css')
@endpush

@push('scripts-js')
@include('lead.lead-js')
@endpush