<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Blog Management</title>
</head>
<body>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Blog Management</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{route('posts.index')}}"> Posts </a></li>    
            <li class="nav-item"><a class="nav-link" href="{{route('categories.index')}}" > Categories </a></li>     
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @auth
            <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> {{Auth::user()->name}}</a></li>
            @else
            <li><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Log in</a></li>
            <li><a href="{{ route('register')}}"><i class="fa fa-user" aria-hidden="true"></i>Register</a></li>
            @endauth
          </ul>
        </div>
      </nav>

      <div class="container">
        @yield('content')
      </div> 
      
</body>
</html>