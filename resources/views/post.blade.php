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
            <h1 class="card-title">{{$post->title}}</h1>
            <div>
                <span><i>{{ $post->author }}<i></span>
                <span> - Postado em {{ $post->created_at->format('d \\d\\e F \\d\\e Y') }}</span>
            </div>
            <br><br>
            <div class="card-text" style="font-style: normal; text-align: left;">
                {!! $post->description !!}
            </div>
        </div>
    </div>
    <div id="disqus_thread"></div>
    <script>

        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://www-advogadomoderno-com.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                
@endsection
@section('scripts')
    <script id="dsq-count-scr" src="//www-advogadomoderno-com.disqus.com/count.js" async></script>
@stop