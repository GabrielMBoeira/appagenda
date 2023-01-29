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

                    <h3 class="title-form">Cadastro de estabelecimento</h3>
                    <form action="{{ route('establishment.store') }}" method="post">
                        @method('POST')
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4 group-row">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail..." value="{{ old('email') }}">
                                <small class="text-danger"> @error('email') {{ $message }} @enderror </small>
                            </div>
                            <div class="form-group col-md-4 group-row">
                                <label for="phone">Telefone:</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Digite seu telefone..." value="{{ old('phone') }}">
                                <small class="text-danger"> @error('phone') {{ $message }} @enderror </small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4 group-row">
                                <label for="name">Nome do estabelecimento:</label>
                                <input type="name" class="form-control" name="name" id="name" placeholder="Digite o nome do estabelecimento..." value="{{ old('name') }}">
                                <small class="text-danger"> @error('name') {{ $message }} @enderror </small>
                            </div>
                            <div class="form-group col-md-6 group-row">
                                <label for="address">Endereço:</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Digite seu telefone..." value="{{ old('address') }}">
                                <small class="text-danger"> @error('address') {{ $message }} @enderror </small>
                            </div>
                        </div>
                        <div class="form-row group-row">
                            <div class="form-group col-md-6">
                                <label for="city">Cidade:</label>
                                <input type="text" class="form-control" name="city" id="city" placeholder="Digite sua cidade..." value="{{ old('city') }}">
                                <small class="text-danger"> @error('city') {{ $message }} @enderror </small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="state">Estado:</label>
                                <select name="state" id="state" class="form-control">
                                    <option value="" disabled selected>Escolha...</option>
                                    <option value="AC" @selected(old('state') == 'AC')>AC</option>
                                    <option value="AL" @selected(old('state') == 'AL')>AL</option>
                                    <option value="AM" @selected(old('state') == 'AM')>AM</option>
                                    <option value="AP" @selected(old('state') == 'AP')>AP</option>
                                    <option value="BA" @selected(old('state') == 'BA')>BA</option>
                                    <option value="CE" @selected(old('state') == 'CE')>CE</option>
                                    <option value="DF" @selected(old('state') == 'DF')>DF</option>
                                    <option value="ES" @selected(old('state') == 'ES')>ES</option>
                                    <option value="GO" @selected(old('state') == 'GO')>GO</option>
                                    <option value="MA" @selected(old('state') == 'MA')>MA</option>
                                    <option value="MG" @selected(old('state') == 'MG')>MG</option>
                                    <option value="MS" @selected(old('state') == 'MS')>MS</option>
                                    <option value="MT" @selected(old('state') == 'MT')>MT</option>
                                    <option value="PA" @selected(old('state') == 'PA')>PA</option>
                                    <option value="PB" @selected(old('state') == 'PB')>PB</option>
                                    <option value="PE" @selected(old('state') == 'PE')>PE</option>
                                    <option value="PI" @selected(old('state') == 'PI')>PI</option>
                                    <option value="PR" @selected(old('state') == 'PR')>PR</option>
                                    <option value="RJ" @selected(old('state') == 'RJ')>RJ</option>
                                    <option value="RN" @selected(old('state') == 'RN')>RN</option>
                                    <option value="RO" @selected(old('state') == 'RO')>RO</option>
                                    <option value="RR" @selected(old('state') == 'RR')>RR</option>
                                    <option value="RS" @selected(old('state') == 'RS')>RS</option>
                                    <option value="SC" @selected(old('state') == 'SC')>SC</option>
                                    <option value="SE" @selected(old('state') == 'SE')>SE</option>
                                    <option value="SP" @selected(old('state') == 'SP')>SP</option>
                                    <option value="TO" @selected(old('state') == 'TO')>TO</option>
                                </select>
                                <small class="text-danger"> @error('state') {{ $message }} @enderror </small>
                            </div>
                        </div>
                        <div class="form-row group-row">
                            <div class="form-group col-md-4">
                                <label for="password">Cadastre sua senha:</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Crie uma senha">
                                <small class="text-danger"> @error('password') {{ $message }} @enderror </small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="confirm-password">Confirme sua senha:</label>
                                <input type="password" class="form-control" name="confirm-password" id="confirm-password" placeholder="Confirme sua senha">
                                <small class="text-danger"> @error('confirm-password') {{ $message }} @enderror </small>
                            </div>
                        </div>
                        <div class="form-group group-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="grid-check" name="grid-check">
                                <label class="form-check-label" for="grid-check">
                                    Li e aceito o termos
                                </label>
                                <a href="{{ url('termo-aceite') }}" class="text-primary">Termo de aceite</a>
                            </div>
                            <small class="text-danger"> @error('grid-check') {{ $message }} @enderror </small>
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Salvar</button>
                    </form>
                </div>
    </section>
@endsection
