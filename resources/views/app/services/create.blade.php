@extends('app.layouts.main')

@section('content')
    <section id="hero" class="d-flex justify-content-center">
        <div class="box-hero" style="z-index: 100;">
            <div class="content-form">
                <h3 class="title-form">Cadastrar tipo de serviço</h3>
                <form action="{{ route('service.store') }}" method="post">
                    @method('POST')
                    @csrf
                    <div class="row group-row">
                        <div class="form-group">
                            <label for="servicet">Descreva o tipo de serviço:</label>
                            <input type="text" class="form-control" name="service" id="service">
                        </div>
                    </div>
                    <div class="row group-row">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Observação</label>
                            <textarea name="observation" class="form-control" id="observation" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="button-form">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
    </section>
@endsection
