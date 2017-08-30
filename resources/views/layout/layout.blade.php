<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test Work</title>
	 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
	<!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Test Work</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  @if(Auth::user())
                    <li><a href="{{route('users')}}">Все пользователи</a></li>
                    <li><a href="{{route('createUser')}}">Добавить пользователя</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('logout')}}">Выйти</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                     @else
                        <li><a href="{{route('reg')}}">Регистрация</a></li>
                    </ul>
                     @endif  
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>@yield('page') @if(Auth::user())<span class="pull-right">Добро пожаловать: <strong> {{ Auth::user()->name }}</strong></span> @endif</h4>
                </div>
            </div>
       <!--  Pages -->
    	@yield('content')
    </div>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script>
	$( function() {
    	$( "#datepicker" ).datepicker({
            dateFormat: 'mm-dd-yy'
        });
  	});
</script>	
</body>
</html>