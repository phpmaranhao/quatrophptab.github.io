<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>4.PHP - Fórum de Profissionais PHP</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<section class="wrap">
		<header>
			<section class="logo">
				<div class="content">
					<a href="#">
						<img src="assets/img/logo.png" alt="4.PHP - Fórum de Profissionais PHP" title="4.PHP - Fórum de Profissionais PHP" />
					</a>
					<h1>Fórum de Profissionais PHP</h1>
					<h4>04 e 05 de Outubro de 2013 - São Luis/MA</h4>
					<small>http://4php.phpmaranhao.com.br</small>
				</div>
					<div class="circles">
					<div class="c yellow"></div>
					<div class="c green"></div>
					<div class="c magenta"></div>
					<div class="c blue"></div>
				</div>
				<div class="circles2">
					<div class="c blue"></div>
					<div class="c yellow"></div>
					<div class="c green"></div>
					<div class="c magenta"></div>
				</div>
				<div class="circles3">
					<div class="c yellow"></div>
					<div class="c blue"></div>
					<div class="c magenta"></div>
					<div class="c green"></div>
				</div>
				</section>
		</header>
		<article>
			<nav class="menu">
				<ul>
					<li><a href="#evento" class="m">Evento</a></li>
					<li><a href="#palestrantes" class="g">Palestrantes</a></li>
					<li><a href="#inscrevase" class="b">Inscreva-se</a></li>
					<li><a href="#comochegar" class="y">Como Chegar</a></li>
					<li><a href="#aovivo" class="p">Ao Vivo</a></li>
				</ul>
			</nav>
			<section class="aba">
					
			</section>
		</article>	
	</section>
</body>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
	function up() {
		$(".magenta").animate({'top' : '-280px'}, 20000, down);
		$(".blue").animate({'top' : '-280px'}, 25000, down);
		$(".yellow").animate({'top' : '-280px'}, 30000, down);
		$(".green").animate({'top' : '-280px'}, 35000, down);
	}
	function down() {
		$(".magenta").animate({'top' : '+280px'}, 20000, up);
		$(".blue").animate({'top' : '+280px'}, 25000, up);
		$(".yellow").animate({'top' : '+280px'}, 30000, up);
		$(".green").animate({'top' : '+280px'}, 35000, up);
	}
	$(document).ready(function() {
		up().delay('1000');
	});
</script>
<script>
	$(".menu a").hover(function(){
		var ref = $(this).attr('href');

		if(ref == '#aovivo') {
			$('.menu').css({'border-top':'5px solid purple'});
		}

		if(ref == '#palestrantes') {
			$('.menu').css({'border-top':'5px solid #8AA64E'});
		}

		if(ref == '#inscrevase') {
			$('.menu').css({'border-top':'5px solid #092140'});
		}

		if(ref == '#comochegar') {
			$('.menu').css({'border-top':'5px solid #E3CB25'});
		}

	    if(ref == '#evento') {
			$('.menu').css({'border-top':'5px solid #BF2A2A'});
		}
	});
</script>
</html>