@extends('main')
@include('paginas.header')

@section('content')
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Entre em contato com o Advogado Moderno</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="formContato" name="sentMessage" novalidate>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" id="nome" type="text" placeholder="Nome *" required data-validation-required-message="Por favor, preencha seu nome.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="E-mail*" required data-validation-required-message="Por favor, preencha seu e-maol.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="phone" type="telefone" placeholder="Telefone">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="mensagem" placeholder="Mensagem *" required data-validation-required-message="Por favor, preencha uma mensagem."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="enviaMensagem" class="btn btn-xl" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
