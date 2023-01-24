@extends('app.layouts.main')

@section('content')
    <section id="hero" class="d-flex justify-content-center">
        <div class="box-hero" style="z-index: 100;">
            <div class="content-form">
                <h3 class="title-form">Configurações do calendário</h3>
                <form>
                    <div class="row group-row">
                        <div class="form-group col-md-4">
                            <label for="date-start">Perído inicial:</label>
                            <input type="date" class="form-control" name="date-start" id="date-start">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="date-end">Perído final:</label>
                            <input type="date" class="form-control" name="date-end" id="date-end">
                        </div>
                    </div>
                    <div class="row group-row">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Observação</label>
                            <textarea name="obs-calendar" class="form-control" id="obs-calendar" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="button-form">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
    </section>
@endsection
