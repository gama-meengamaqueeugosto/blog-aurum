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
                <div class="col-lg-12">
                    <p>Neste e-book você vai conhecer as principais características para ser um advogado moderno, tornando-se um profissional de destaque no mercado.</p>
                </div>
                <form action="{{ route('leads.save') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="ebook" value="1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" name="name" id="nome" type="text" placeholder="Nome *" required value="{{old('name')}}">
                                <p id="error-name" class="help-block text-danger">
                                    @if($errors->has('name'))
                                        {{ $errors->first('name')}}
                                    @endif
                                    @if(session()->has('error'))
                                        {{ session()->get('error.name') }}
                                    @endif
                                </p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" placeholder="E-mail*" required value="{{old('email')}}">
                                <p class="help-block text-danger">
                                    @if($errors->has('email'))
                                        {{ $errors->first('email') }}
                                    @endif
                                </p>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="type" id="type1" value="B2C" checked>
                                Pessoa Física
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="type" id="type2" value="B2B">
                                Pessoa Jurídica
                              </label>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <button class="btn btn-xl" type="submit">Baixar agora!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
        $(document).ready(function(){
            $("#nome").on('blur', function() {
                $words = $("#nome").val().trim().split(' ');
                if($words.length < 2){
                    $("#error-name").text("É necessário seu nome completo");
                }else {
                    $("#error-name").text("");
                }
            });
        });
    </script>
@stop