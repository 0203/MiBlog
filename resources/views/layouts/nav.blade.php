<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            @if (Auth::check())
                <a class="nav-link mr-auto" href="/"><i class="fa fa-user"></i> {{ Auth::user()->name  }}</a>

            @else
            <a class="nav-link mr-auto" href="/">You are not login</a>
            @endif
            <a class="nav-link" href="/"><i class="fa fa-paste"></i> All Post</a>
            <a class="nav-link" href="/posts"><i class="fa fa-edit"></i> Create Post</a>
                @if (Auth::check())
            <a class="nav-link ml-auto" href="/logout"><i class="fa fa-sign-in-alt"></i> Logout</a>
                @else
                    <a class="nav-link ml-auto" href="/login"><i class="fa fa-sign-out-alt"></i> Login</a>
                @endif
        </nav>
        
    </div>
</div>