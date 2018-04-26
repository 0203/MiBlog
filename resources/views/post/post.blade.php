@extends ('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">

        <h2>{{ $post->title }}</h2>

        @if (count($post->tags))
            <ul>

                @foreach($post->tags as $tag)
                    <li>

                        <a href="/posts/tags/{{ $tag-> name }}"> {{$tag->name}} </a>

                    </li>
                @endforeach
            </ul>
        @endif

        <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by {{ $post->user->name }}</p>

        {{$post->body}}

        <hr>

        <div class="card">
            <div class="card-block">
                <form method="post" action="/posts/{{$post->id}}/comment">
                    {{ csrf_field() }}
                    <div class="form-group">

                        <textarea name="body" placeholder="your comment here" class="form-control" required></textarea>

                    </div>

                    <div class="form-group">

                        <button class="btn btn-info btn-sm">add comment</button>

                    </div>

                </form>
                @include('layouts.errors')
            </div>
        </div>

        <hr>

        <h4>Comments:</h4>
        <div class="comments">
           <ul class="list-group">
            @foreach($post->comments as $comment)

                <li class="list-group-item">
                    <strong> {{$comment->created_at->diffForHumans()}} : </strong>
                    {{$comment->body}}
                </li>

            @endforeach
           </ul>
        </div>
        <br><br>
    </div><!-- /.blog-main -->

@endsection