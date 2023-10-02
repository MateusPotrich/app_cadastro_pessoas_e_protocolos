@extends('site.layouts.basico')

<link rel="stylesheet" href="{{asset('css/estilo_body.css')}}">

@section('titulo', 'Principal')

@section('conteudo')
    <div class="conteudo-destaque">
        <br>
        <br>
        <br>
        <div class="box">
            <a href="sobrenos">Cadastro de Pessoas</a>
            <a href="contato">Cadastro de Protocolos</a>
            <a href="auditoria">Auditar Protocolo</a>
            <a href="login">Voltar</a>
        </div>
    </div>
@endsection
