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
                    <h2 class="card-title">Obrigado pela confiança!</h2>
                    <br><br>
                    <p>A partir de agora você receberá <br>todas as novidades do nosso blog.</p>
                    <br>
                    <a href="{{ url('/') }}" class="btn btn-primary">Voltar para a home</a>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
