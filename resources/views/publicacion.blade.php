<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>{{$publicacion->titulo}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<!-- <a href="index.html" class="logo">
									<span class="symbol"><img src="/images/logo.svg" alt="" /></span><span class="title">Phantom</span>
								</a> -->

							<!-- Nav -->
								<!-- <nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav> -->

						</div>
					</header>

				

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>{{$publicacion->titulo}}</h1>
							<span class="image main"><img src="{{$publicacion->imagen}}" alt="" height="300px" style="width: 700px;"/></span>
                            <p style="color :red;font-weight: bold;">Unidad : {{$publicacion->unidad}}</p>
							<?php

							$arreglo  = $publicacion->contenido;
$arregloDividido = explode("ESTOESUNENTER", $arreglo);
?>

<?php foreach($arregloDividido as $key=>$value): ?>
	<p>{{$arregloDividido[$key]}}</p>
    <?php endforeach; ?>
                        </div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
							<h2>Nuestras Redes...</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Se trabajo con tecnologia</li><li>Design: <a href="https://openwebinars.net/blog/que-es-html5/">HTML5</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>