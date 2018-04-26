<div class="col-sm-3 offset-sm-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>My Blog is actually the result from what I learned based on the tutorial in <em>Laracast</em>.
           Its teach me how to build my own blog using <em>Php Laravel</em>.</p>
    </div>
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            @foreach($archives as $stats)

            <li><a href="/?month={{$stats['month']}}&year{{$stats['year']}}">{{ $stats['month'].' '.$stats['year'] }}</a></li>

            @endforeach
        </ol>
    </div>

    <div class="sidebar-module">
        <h4>Tags</h4>
        <ol class="list-unstyled">
            @foreach($tags as $tag)

                <li><a href="/posts/tags/{{ $tag }}">{{ $tag }}</a></li>

            @endforeach
        </ol>
    </div>

    <div class="sidebar-module">
        <h4>Other Blogs</h4>
        <ol class="list-unstyled">
            <li><a href="http://www.siakapkeli.my/">Siakap Keli</a></li>
            <li><a href="http://penmerah.com/">PenMerah.com</a></li>
            <li><a href="https://www.bharian.com.my/">Berita Harian Online</a></li>
            <li><a href="https://www.hmetro.com.my/">Metro Online</a></li>
            <li><a href="http://www.sinarharian.com.my/">Sinar Harian Online</a></li>
            <li><a href="https://www.thestar.com.my/">The Star</a></li>
            <li><a href="https://www.nst.com.my/">News Straits Times</a></li>
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Follow Me</h4>
        <ol class="list-unstyled">
            <li><a href="https://github.com/0203" target="_blank"><i class="fab fa-github"></i> GitHub</a></li>
            <li><a href="https://twitter.com/rabani_izzat?lang=en" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
            <li><a href="https://www.facebook.com/izzat.rabani" target="_blank"><i class="fab fa-facebook"></i> Facebook</a></li>
        </ol>
    </div>
</div><!-- /.blog-sidebar -->