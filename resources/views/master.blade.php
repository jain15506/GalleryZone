<!DOCTYPE html>
<html>
<head>
	<title> My Gallery App</title>
	
	<link rel="stylesheet" type="text/css" href="{{ url(elixir('css/all.css'))}}">
<script type="text/javascript">
var baseUrl = "{{url('/')}}";
</script>

</head>
<body>
	<div class="container">
		@if(Session::has('flash_message'))
		<div class="alert alert-success">{{Session::get('flash_message')}}</div>
		@endif
		@if(Session::has('flash_error'))
		<div class="alert alert-danger">{{Session::get('flash_errorth')}}</div>
		@endif
		@yield('content')
	</div>
	
	<script type="text/javascript" src="{{url(elixir('js/all.js'))}}"></script>
</body>
</body>
</html>