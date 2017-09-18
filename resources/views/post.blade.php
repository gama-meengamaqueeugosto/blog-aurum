@extends('main')

<header class="masthead" style="background-image: url({{ $post->image  }})">
    <div class="container">
        <div class="intro-text">
            {{--<div class="intro-lead-in">Blog do Advogado Moderno</div>--}}
        </div>
    </div>
</header>

@section('content')
    <br><br>
    <div class="card mb-12">
        <div class="card-body">
            <h2 class="card-title">{{$post->title}}</h2>
            <div>
                <span><i>{{ $post->author }}<i></span>
                <span> - Postado em {{ $post->created_at->format('d \\d\\e F \\d\\e Y') }}</span>
            </div>
            <br><br>
            <div class="card-text">
                {!! $post->description !!}
            </div>
        </div>
    </div>
@endsection
