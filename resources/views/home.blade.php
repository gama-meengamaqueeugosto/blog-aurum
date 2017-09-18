@extends('main')

@section('content')
    <br><br>
    <div class="row">

        @include("paginas.blog")


        <div class="col-md-4">
            @include("paginas.newsletter")
            @include("paginas.busca")
            @include("paginas.tags")
        </div>
    </div>
@endsection
