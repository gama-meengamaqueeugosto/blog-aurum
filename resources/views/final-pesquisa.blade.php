@extends('main')
@include('paginas.header')

@section('content')
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img class="card-img-top" src="{{ asset('img/thankyou.jpg') }}" alt="Obrigada">
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <br><br>
                    <h2 class="card-title">Obrigado por responder a pesquisa!</h2>
                    <br><br>
                    <p>Sua opinião é muito importante para nós.</p>
                    <br>
                    <a href="{{ url('/') }}" class="btn btn-primary">Conheça nosso blog</a>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
