<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>BAR</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="inicio" id="logo">BAR<em>DIAMANTE</em></a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="inicio">INICIO</a></li>
								<li><a href="api">API</a></li>
						</nav>

				</div>

			<!-- Main -->
				<table class="table table-striped table-hover">
					<thead>
						<th>ID</th>
						<th>DESCRIPCION</th>
						<th>CATEGORIA</th>
                    </thead>
					<tbody>
					@foreach($productos as $producto)
					<tr>
						<td>{{$producto->id}}</td>
						<td>{{$producto->descripcion}}</td>
						<td>{{$producto->categoria->descripcion}}</td>
					</tr>
					@endforeach
						</tbody>
					</table>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>