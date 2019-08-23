<!DOCTYPE HTML>
<html>
<head>
<title>LARAVEL-@yield('title')</title>
<link rel="stylesheet" href="{{mix('css/app.css')}}">

<body>
@include('layouts._header')
<div class="container">
	<div>
		@include('shared._messages')
		@yield('content')
		@include('layouts._foot')
	</div>
</div>

</body>
</head>
</html>
