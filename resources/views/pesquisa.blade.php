@extends('main')
@include('paginas.header')

@section('content')
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <form action="{{ route('leads.save') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="pesquisa" value="1">
                    <div class="form-group">
                        <label for="name">Nome Completo</label>
                        <input class="form-control" name="name" id="nome" type="text" placeholder="Nome completo*" required value="{{old('name')}}">
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
                        <label for="email">Email</label>
                        <input class="form-control" name="email" id="email" type="email" placeholder="E-mail*" required value="{{old('email')}}">
                        <p class="help-block text-danger">
                            @if($errors->has('email'))
                                {{ $errors->first('email') }}
                            @endif
                        </p>
                      </div>
                      <hr>
                      <div class="form-group">
                        <label for="email">
                          Muitos advogados relatam que gastam boa parte de seu tempo acompanhando etapas e prazos dos inúmeros processos em que atuam. Você se reconhece nessa situação?
                        </label>
                        <fieldset class="form-group">
                          <div class="row">
                            <div class="col-sm-10">
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="pg1" id="pg1-1" value="sim" checked>
                                  Sim
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="pg1" id="pg1-2" value="nao">
                                  Não
                                </label>
                              </div>                             
                            </div>
                          </div>
                        </fieldset>
                      </div>
                      <hr>
                      <div class="form-group">
                        <label for="email">
                          Alguns desses profissionais alegam que já chegaram a perder prazos de processos devido ao grande número de dados a serem controlados. Isso já aconteceu com você?
                        </label>
                        <fieldset class="form-group">
                          <div class="row">
                            <div class="col-sm-10">
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="pg2" id="pg2" value="sim" checked>
                                  Sim
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="pg2" id="pg2-2" value="nao">
                                  Não
                                </label>
                              </div>                             
                            </div>
                          </div>
                        </fieldset>
                      </div>
                      <hr>
                      <div class="form-group">
                        <label for="email">
                          Você acredita que um sistema de gestão de prazos e documentos relativos aos processos poderia ajudar a otimizar sua rotina?
                        </label>
                        <fieldset class="form-group">
                          <div class="row">
                            <div class="col-sm-10">
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                  Sim
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                  Não
                                </label>
                              </div>                             
                            </div>
                          </div>
                        </fieldset>
                      </div>
                      <hr>
                      <div class="form-group">
                        <label for="pg4">
                          Além do controle de prazos e documentos, que outras funções você julga que seriam necessárias a um programa como este?
                        </label>
                        <textarea rows="5" class="form-control" name="pg4" id="pg4">
                          {{old('pg4')}}
                        </textarea>
                      </div>
                      <hr>
                      <button type="submit" class="btn btn-primary">Enviar respostas</button>
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