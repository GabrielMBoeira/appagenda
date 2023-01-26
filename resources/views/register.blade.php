@extends('layouts.site-main')

@section('content')
    <section id="hero" class="d-flex justify-content-center">
        <div class="box-hero" style="z-index: 100;">
            <div class="content-form">
                <h3 class="title-form">Cadastrar estabelecimento</h3>
                <form action="{{ route('service.store') }}" method="post">
                    @method('POST')
                    @csrf

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail...">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="phone">Telefone</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Digite seu telefone...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Endereço</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Digite seu endereço...">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="city">Cidade</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="Digite sua cidade...">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="state">Estado</label>
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
                        <label for="password">Cadastre sua senha</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Crie uma senha">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="confirm-password">Confirme sua senha</label>
                        <input type="password" class="form-control" name="confirm-password" id="confirm-password"  placeholder="Confirme sua senha">
                    </div>
                    <div class="form-group">
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
