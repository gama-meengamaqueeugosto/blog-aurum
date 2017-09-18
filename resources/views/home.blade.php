@extends('main')
@include('paginas.header')

@section('content')
    <section id="blog">
    <div class="row">
            @include("paginas.blog")

            <div class="col-md-4">
                @include("paginas.newsletter")
                @include("paginas.busca")
                @include("paginas.tags")
            </div>
    </div>
    </section>
@endsection
