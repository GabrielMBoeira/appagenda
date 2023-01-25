@extends('app.layouts.main')

@section('content')
    <section id="hero" class="d-flex justify-content-center">
        <div class="box-hero" style="z-index: 100;">
            <div class="content-form">
                <h3 class="title-form">Agendar horário</h3>
                <form action="#">
                    <div class="row group-row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Data:</label>
                            <select id="inputState" class="form-control">
                                <option selected>Escolha uma data</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="hour">Horário:</label>
                            <select id="inputState" class="form-control">
                                <option selected>Escolha um horário</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="row group-row">
                        <div class="form-group col-md-10">
                            <label for="service">Tipo de serviço:</label>
                            <select id="inputState" class="form-control">
                                <option selected>Escolha um tipo de serviço</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="row group-row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputPassword1">Telefone</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="button-form">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
    </section>
@endsection
