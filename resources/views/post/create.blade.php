@extends ('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        <div class="blog-post">

            @include('layouts.errors')
            <form class="form-horizontal" method="POST" action="/posts">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                </div>

                <div class="form-group">
                    <label for="post" class="col-sm-2 control-label">Post</label>
                    <div class="col-sm-10">
                        <textarea name="post" id="" cols="58" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection