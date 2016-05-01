<!doctype html>
<html class="layout-auth">
<head>
	<meta charset="utf-8">
	<title>Auth</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:400,300,600,700,800,300italic">
	<link rel="stylesheet" href="/css/backend.css">
</head>
<body>
	<div class="row">
		<div class="medium-6 medium-centered large-4 large-centered columns">
			@yield('main')

			<div class="bar">
				<div class="color color-1"></div>
				<div class="color color-2"></div>
				<div class="color color-3"></div>
				<div class="color color-4"></div>
			</div>
		</div>
	</div>
	<script src="/js/backend.js"></script>
</body>
</html>