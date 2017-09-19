@extends('main')
@include('paginas.header')

@section('content')
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img class="card-img-top" src="{{ asset('img/propaganda/ebook.png') }}" alt="Guia do Advogado Moderno">
            </div>
            <div class="col-lg-6">
                <form id="formContato" name="sentMessage" novalidate>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" id="nome" type="text" placeholder="Nome *" required
                                       data-validation-required-message="Por favor, preencha seu nome.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="E-mail*" required
                                       data-validation-required-message="Por favor, preencha seu e-maol.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="enviaMensagem" class="btn btn-xl" type="submit">Baixar agora!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
