<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Little Shortener</title>
    <link rel="stylesheet" href="fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    @if (Session::has('flash_message'))
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif

    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">MRTZ - Little Shortener</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li {{ Request::is('/') ? 'class="active"' : '' }}><a href="/">Home</a></li>
              <li {{ Request::is('info') ? 'class="active"' : '' }}><a href="/info">Info</a></li>
              <li {{ Request::is('contact') ? 'class="active"' : '' }}><a href="/contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      @yield('content')

      <!-- AD STORE PLACE -->
      
      <!-- END AD STORE PLACE -->
    </div>

    <!-- Please don't use massive JS files for minor functionality. This is okay for the demo, though. -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>
