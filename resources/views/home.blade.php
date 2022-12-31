
@foreach ($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <a href="/posts/{{ $post->id }}">Read more</a>
@endforeach
