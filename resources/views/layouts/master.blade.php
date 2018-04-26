
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Mi Blog</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

@include('layouts.nav')

@if ($flash = session('message'))
    <div id="flash-message" class="alert alert-success" role="alert">
        {{ $flash  }}
    </div>
@endif

<div class="blog-header">
    <div class="container">
        <h2 class="blog-title">Mi Blog</h2>
        <p class="lead blog-description">Give you the latest news and viral stories.</p>
    </div>
</div>

<div class="container">

    <div class="row">
        @yield('content')

        @include('layouts.sidebar')

    </div><!-- /.row -->

</div><!-- /.container -->
@include('layouts.footer')
</body>
</html>
