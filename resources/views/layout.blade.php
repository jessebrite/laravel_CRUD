<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'My projects')</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">	
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}"> -->
</head>
<body>
	<div class="field">
		<ul class="navbar">
			<li><a href="/">Home</a></li>
			<li><a href="/sideNotes">Side Notes</a></li>
			<li><a href="/project">Project</a></li>
		</ul>
	</div>
	@yield('content')
	@yield('message')
</body>
</html>