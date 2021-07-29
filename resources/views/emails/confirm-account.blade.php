@extends('emails.mail-template')
@section('content-mail')
    <p>
        <span style="font-size: 28px !important;">Olá, <span class="name-user">{{ $userName }}!</span></span><br>
        <span style="font-size: 18px !important;">Faça o download do seu e-book no link abaixo.</span><br>
        <a href="{{ $link }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Fazer download do meu e-book</a><br>
    </p>
@endsection