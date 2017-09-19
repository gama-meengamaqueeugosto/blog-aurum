@extends('main')
@include('paginas.header')

@section('content')
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img class="card-img-top" src="{{ asset('img/propaganda/cartao.jpg') }}" alt="Daixe seu cartão">
            </div>
            <div class="col-lg-6">
                <form id="formCartao" name="formCartao" novalidate>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="radio col-md-4">
                                        <label><input type="radio" name="modelo" value="1" checked> Modelo 1</label>
                                    </div>
                                    <div class="radio  col-md-4">
                                        <label><input type="radio" name="modelo" value="2"> Modelo 2</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="nome" type="text" placeholder="Nome *" required
                                       data-validation-required-message="Por favor, preencha seu nome.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="E-mail*" required
                                       data-validation-required-message="Por favor, preencha seu e-mail.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="telefone" type="text" placeholder="Telefone*" required
                                       data-validation-required-message="Por favor, preencha seu telefone.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="site" type="text" placeholder="Site">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="radio col-md-4">
                                        <label><input type="radio" name="type" value="B2C" checked> Pessoa Física</label>
                                    </div>
                                    <div class="radio  col-md-4">
                                        <label><input type="radio" name="type" value="B2B"> Pessoa Jurídica</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="enviaMensagem" class="btn btn-xl" type="submit">Gerar Cartão</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
