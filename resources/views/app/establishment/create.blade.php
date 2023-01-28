@extends('app.layouts.main')

@section('content')
    <section id="hero" class="d-flex justify-content-center">
        <div class="box-hero" style="z-index: 100;">
            <div class="content-form">

                {{-- Flash Message --}}
                <div class="container-fluid">
                    <div class="row">
                        @if (session('msg'))
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                Launch demo modal
                            </button>


                        @endif
                    </div>



                <h3 class="title-form">Cadastrar estabelecimento</h3>
                <form action="{{ route('establishment.store') }}" method="post">
                    @method('POST')
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4 group-row">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Digite seu e-mail..." value="{{ old('email') }}">
                        </div>
                        <div class="form-group col-md-4 group-row">
                            <label for="phone">Telefone:</label>
                            <input type="text" class="form-control" name="phone" id="phone"
                                placeholder="Digite seu telefone..." value="{{ old('phone') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4 group-row">
                            <label for="name">Nome do estabelecimento:</label>
                            <input type="name" class="form-control" name="name" id="name"
                                placeholder="Digite o nome do estabelecimento..." value="{{ old('name') }}">
                        </div>
                        <div class="form-group col-md-6 group-row">
                            <label for="address">Endereço:</label>
                            <input type="text" class="form-control" name="address" id="address"
                                placeholder="Digite seu telefone..." value="{{ old('address') }}">
                        </div>
                    </div>
                    <div class="form-row group-row">
                        <div class="form-group col-md-6">
                            <label for="city">Cidade:</label>
                            <input type="text" class="form-control" name="city" id="city"
                                placeholder="Digite sua cidade..." value="{{ old('city') }}">
                        </div>
                        <div class="form-group col-md-4 group-row">
                            <label for="state">Estado:</label>
                            <select name="state" id="state" class="form-control">
                                <option value=""disabled selected>Escolha...</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AM">AM</option>
                                <option value="AP">AP</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MG">MG</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="PR">PR</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="RS">RS</option>
                                <option value="SC">SC</option>
                                <option value="SE">SE</option>
                                <option value="SP">SP</option>
                                <option value="TO">TO</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="password">Cadastre sua senha:</label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Crie uma senha">
                    </div>
                    <div class="form-group col-md-4 group-row">
                        <label for="confirm-password">Confirme sua senha:</label>
                        <input type="password" class="form-control" name="confirm-password" id="confirm-password"
                            placeholder="Confirme sua senha">
                    </div>
                    <div class="form-group group-row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="grid-check">
                            <label class="form-check-label" for="grid-check">
                                Li e aceito o termos
                            </label>
                            <a href="{{ url('termo-aceite') }}">Termo de aceite</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="save">Salvar</button>

                </form>
            </div>
    </section>
@endsection
