@extends('emails.mail-template')
@section('content-mail')
    <p>
        <span style="font-size: 28px !important;">Olá, <span class="name-user">{{ $userName }}!</span></span><br>
        <span style="font-size: 18px !important;">Por favor, informe novamente os seus dados para receber um novo link de donwload.</span><br>
        <a href="{{ $link }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Pegar meu e-book</a><br>
    </p>
@endsection