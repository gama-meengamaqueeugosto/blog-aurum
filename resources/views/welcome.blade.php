
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106648596-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments)};
            gtag('js', new Date());

            gtag('config', 'UA-106648596-1');
        </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Advogado Moderno</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                max-width: 100%;
                overflow-x: hidden;
                margin: 0;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                margin-top: 5%;
            }

            .title {
                display: inline-block;
                width: 50%;
                margin: 0 auto;
            }
            .title img {
                width: auto;
                max-width: 100%;
                height: auto;
            }

            .links {
                margin-top: -8%;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        @include("analytics")
        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif --}}

            <div class="content">
                <div class="title">
                    <img src="{{ asset('img/logo.png') }}" alt="Advogado Moderno">
                </div>

                <div class="links">
                    <h1>Em construção...</h1>
                </div>
            </div>
        </div>
    </body>
</html>
