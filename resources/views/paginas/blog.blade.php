<div class="col-md-8">
    @foreach($posts as $post)
        <!-- Blog Post -->
        <div class="card mb-4">
            <img class="card-img-top" src="{{ $post->image }}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <div class="card-text">
                    {{ str_limit($post->short_description, 100) }}
                </div>
                <br>
                <a href="{{ route('site.post', $post->slug) }}" class="btn btn-primary">Leia Mais &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Postado em {{ $post->created_at->format('d \\d\\e F \\d\\e Y') }} por
                <a href="#">{{ $post->author }}</a>
            </div>
        </div>
    @endforeach
</div>

