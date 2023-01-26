@extends('layouts.site-main')

@section('content')
    <section id="hero" class="d-flex justify-content-center">
        <div class="box-hero" style="z-index: 100;">
            <div class="content-form">
                <h3 class="title-form">Termo de aceite</h3>

                <p>
                    Eu, [nome do usuário], concordo em cumprir os Termos e Condições aplicáveis ​​ao uso do [nome do site]
                    (o “Site”), a fim de usufruir dos serviços disponíveis no Site. Reconheço que li e compreendi os Termos
                    e Condições e aceito todos os termos e condições aplicáveis. Estou ciente de que podem ser aplicadas
                    outras políticas e diretrizes específicas para usar certas áreas ou recursos do Site. Estou ciente de
                    que posso ser solicitado a revisar e aceitar tais políticas e diretrizes adicionais ao usar tais áreas
                    ou recursos e que, ao usar tais áreas ou recursos, estou concordando com os termos adicionais
                    aplicáveis.
                </p>
                <div class="d-flex justify-content-end">
                    <a href="" class="btn btn-primary">Aceito</a>
                </div>
            </div>
    </section>
@endsection
