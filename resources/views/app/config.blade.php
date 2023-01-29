@extends('app.layouts.main')

@section('content')
    <section id="hero" class="d-flex justify-content-center">
        <div class="box-hero" style="z-index: 100;">

            <div class="content-form">
                <h3 class="title-form">Configurações</h3>

                <ul>
                    <li>
                        <a href="{{ route('establishment.create') }}">Configurações de cadastro</a>
                    </li>
                    <li>
                        <a href="{{ route('calendar.create') }}">Configurações do calendário</a>
                    </li>
                    <li>
                        <a href="{{ route('service.create') }}">Configurações do tipo de serviço</a>
                    </li>
                </ul>

            </div>


        </div>
    </section>
@endsection
