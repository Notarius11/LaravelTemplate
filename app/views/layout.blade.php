<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Connect Stavanger Fotballgolf</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        {{ HTML::style('/css/main.css') }}
        {{ HTML::style('/css/normalize.css') }}

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <div id="container">
            <div id="header">
                <h1>Stavanger Fotballgolf Admin</h1>
                @if (Auth::check())
                    <h3><span>Welcome {{ Auth::user()->username; }} - </span><a href="#">Logout</a></h3>
                   <!--  {{ Form::open(array('route' => 'logout'), 'POST') }}

                    
                    <p>{{ Form::submit('Logout') }}</p>
                    
                    {{ Form::close() }} -->
                @endif
            </div>
		    @yield('content')
		</div>
    </body>
</html>