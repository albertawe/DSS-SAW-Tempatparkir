<!DOCTYPE HTML>
<html>
	<head>
		<title>Eventually by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1>SAW Tempat Parkir</h1>
				<p>Pemilihan tempat parkir berdasarkan Simple Additive Weighting.</p>
			</header>

		<!-- Signup Form -->
			<form id="signup-form" method="post" action="#">
        <a href="{{url('seleksi')}}" class="btn btn-primary">Mulai Seleksi</a><Br>
        <a href="{{url('/data')}}" class="btn btn-primary">List data tempat parkir</a><br>
        <a href="{{url('/form')}}" class="btn btn-primary">Tambah data tempat parkir</a>
			</form>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
				</ul>
			</footer>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="/js/main.js"></script>

	</body>
</html>
