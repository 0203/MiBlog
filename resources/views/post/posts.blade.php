
<div class="blog-post">

    <a href="/posts/{{$post->id}}}" ><h2 style="color:cornflowerblue">{{ $post->title }}</h2></a>
<p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by {{ $post->user->name }}</p>

{{$post->body}}

</div><!-- /.blog-post -->