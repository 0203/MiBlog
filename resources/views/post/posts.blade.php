
<div class="blog-post">

    <a href="/posts/{{$post->id}}}"><h5 class="blog-post-title">{{ $post->title }}</h5></a>
<p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by {{ $post->user->name }}</p>

{{$post->body}}

</div><!-- /.blog-post -->