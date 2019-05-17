<!DOCTYPE html>
<html>
<head>
	<title>Online Registration</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>

</head>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Laravel</a>
    </div>
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="#">About</a></li>
      
    </ul>
    

    @if (Auth::check())
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
      {{ Auth::user()->name }} </a></li>
      <li><a href="/main/logout"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
      </ul>                  
    @else
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('/main') }}">Login</a></li>
      <li><a href="{{ url('/signup') }}">Register</a></li>
    @endif
    </ul>

  </div>
</nav>
<body>
	