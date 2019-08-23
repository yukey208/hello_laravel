<!DOCTYPE HTML>
<html>
<head>
<title>LARAVEL-@yield('title')</title>
<link rel="stylesheet" href="{{mix('css/app.css')}}"> 
<body>
@include('layouts._header')
<div class="container">
	<div class="offset-md-1 col-md-10">
		@include('shared._messages')
		@yield('content')
		@include('layouts._foot')
	</div>
</div>
	<script src="{{mix('js/app.js')}}"></script>
</body>
</head>
</html>
