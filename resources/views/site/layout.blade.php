<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>site</title>
		<link rel="dns-prefetch" href="//fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
		
		
		<link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
		
		<link rel="stylesheet" href="{{asset('site/css/style.css')}}">
		<link href="{{ asset('site/css/app.css') }}" rel="stylesheet">
		@stack('css')
	</head>
	<body>
		
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">
					<a class="navbar-brand" href="{{ url('site/home') }}" style="color: blue;">MY BLOG</a>
				</div>
				<div class="pull-right">
					@if(Auth::check())
					<a class="btn btn-primary" href="{{route('dashboard')}}">Dashboard</a>
					
					<a  class="btn btn-primary"href="{{ route('logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
					@else
					<a class="btn btn-primary" href="{{url('login')}}">Login</a>
					<a class="btn btn-primary" href="{{url('register')}}">Registration</a>
					
					@endif
					
					
				</div>
				
			</nav>
		</header>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						@yield('content')
					</div>
					<div class="col-md-2">
						@yield('sidebar')
					</div>
				</div>
			</div>
		</section>
		<script src="{{asset('site/js/jquery.js')}}"></script>
		<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('site/js/function.js')}}"></script>
	</body>
</html>