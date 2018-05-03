<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>App - @yield('title')</title>
</head>
<body>
	@section('sidebar')
		This is the master sidebar.
	@show
	<div class="contaier">
		@yield('content')
	</div>
</body>
</html>