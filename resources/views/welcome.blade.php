<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Advogado Moderno</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/advogadomoderno.css') }}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <img class="card-img-top" style="width: 100px" src="img/logos/am.png" alt="Card image cap">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Blog do Advogado Moderno</div>
        </div>
    </div>
</header>

<!-- Page Content -->
<section class="bg-light" id="blog">
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

            {{--@foreach( $posts as $post )--}}
            {{--<div class="card mb-4">--}}
            {{--<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">--}}
            {{--<div class="card-body">--}}
            {{--<h2 class="card-title">Post Title</h2>--}}
            {{--<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>--}}
            {{--<a href="#" class="btn btn-primary">Leia Mais &rarr;</a>--}}
            {{--</div>--}}
            {{--<div class="card-footer text-muted">--}}
            {{--Posted on January 1, 2017 by--}}
            {{--<a href="#">Start Bootstrap</a>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="list-group">--}}
            {{--<div class="list-group-item">--}}
            {{--<h3><a href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a>--}}
            {{--@if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin()))--}}
            {{--@if($post->active == '1')--}}
            {{--<button class="btn" style="float: right"><a href="{{ url('edit/'.$post->slug)}}">Edit Post</a></button>--}}
            {{--@else--}}
            {{--<button class="btn" style="float: right"><a href="{{ url('edit/'.$post->slug)}}">Edit Draft</a></button>--}}
            {{--@endif--}}
            {{--@endif--}}
            {{--</h3>--}}
            {{--<p>{{ $post->created_at->format('M d,Y \a\t h:i a') }} By <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a></p>--}}

            {{--</div>--}}
            {{--<div class="list-group-item">--}}
            {{--<article>--}}
            {{--{!! str_limit($post->body, $limit = 1500, $end = '....... <a href='.url("/".$post->slug).'>Read More</a>') !!}--}}
            {{--</article>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--@endforeach--}}
            {{--{!! $posts->render() !!}--}}

            {{ $posts }}

            <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a href="#" class="btn btn-primary">Leia Mais &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2017 by
                        <a href="#">Start Bootstrap</a>
                    </div>
                </div>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <div class="card my-4">
                    <h5 class="card-header">ASSINE NOSSO CONTEÚDO</h5>
                    <div class="card-body">
                        <form action="{{ route('leads.save') }}" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="form-assinar" name="assign" novalidate>
                                        <div class="form-group">
                                            <input class="form-control" id="nome" type="text" placeholder="Nome *" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="email" type="email" placeholder="E-mail *" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ion-paper-airplane"></i>
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
                        </div>
                    </div>
                </div>

                <!-- Tags Widget -->
                <div class="card my-4">
                    <h5 class="card-header">TAGS</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Tag1</a>
                                    </li>
                                    <li>
                                        <a href="#">Tag2</a>
                                    </li>
                                    <li>
                                        <a href="#">Tag3</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Tag4</a>
                                    </li>
                                    <li>
                                        <a href="#">Tag5</a>
                                    </li>
                                    <li>
                                        <a href="#">Tag6</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
</section>
<!-- /.container -->

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('js/agency.min.js') }}"></script>

</body>

</html>
