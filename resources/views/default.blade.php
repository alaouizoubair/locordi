<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="../../favicon.ico">

    <title>Location Ordinateur</title>

    <!-- Bootstrap core CSS -->
    {!! HTML::style('css/bootstrap.css') !!}

    {!! HTML::style('css/stylesheet1.css') !!}
    

    <!-- Jquery Libarary -->
    {!! HTML::script('js/jquery.js') !!}

    <!-- Bootstrap core Js -->
    {!! HTML::script('js/bootstrap.js') !!}

    <!-- Side Menu Style -->
    {!! HTML::style('css/sidemenu.css') !!}
    {!! HTML::script('js/script.js') !!}

    <!-- Google Fonts -->
    {!! HTML::style('https://fonts.googleapis.com/css?family=Raleway:200,400|Khula') !!}
  </head>

  <body>
    @yield('sidemenu')

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">LOCORDI</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Accueil</a></li>
            <li><a href="#dossier">Profile</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            @if(!Auth::check())
                <li><a href="" data-toggle="modal" data-target="#login-mdl">Login</a></li>
                <li><a href="" data-toggle="modal" data-target="#register-mdl">Register</a></li>
              @else
                <li><a href="{{ action('Auth\AuthController@getLogout') }}">Logout</a></li>
              @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container" style="margin-top:100px;">
      
      <div class="col-sm-12">
          @yield('content') 
      </div>

    </div><!-- /.container -->
    
    @if(!Auth::check())
      @include('includes/login')
      @include('includes/register')
    @endif
    
    <!-- Angular Libarary -->
    {!! HTML::script('js/angular.js') !!}
    {!! HTML::script('js/angular-route.js') !!} 
    
    <!-- Angular Controller Libarary -->
    {!! HTML::script('js/angularController.js') !!}
</body>
</html>