@extends('main')
@include('paginas.header')

@section('content')
    <div class="row">
            @include("paginas.blog")

            <div class="col-md-4">
                @include("paginas.newsletter")
                @include("paginas.busca")
                @include("paginas.propagandaEbook")
                @include("paginas.facebook")
            </div>
    </div>
@endsection
