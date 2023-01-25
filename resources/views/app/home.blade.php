@extends('app.layouts.main')

@section('content')
    <section id="hero">
        <div class="box-hero" style="z-index: 100;">

            <div class="box-table">
                <p class="d-flex justify-content-center">
                    <a href="{{ route('agenda.index') }}" class="btn btn-sm btn-primary">Novo agendamento</a>
                </p>
                <div class="table-responsive-md">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Data</th>
                                <th scope="col">Horário</th>
                                <th scope="col">Placa</th>
                                <th scope="col">Contato</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Deletar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>12/12/2023</td>
                                <td>12:00</td>
                                <td>MMC1234</td>
                                <td>47999122345</td>
                                <td>
                                    <button class="btn btn-sm btn-success">Editar</button>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-danger">Deletar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
@endsection
