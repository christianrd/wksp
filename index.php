<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Workshops con Bootstrap 3</title>
	
	<?php include("inc/head_common.php"); ?>
	<link rel="stylesheet" href="css/load.css">
	<link rel="stylesheet" href="css/workshops.css">

	<!-- jquery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.loader').remove();
		});
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4"><span class="loader"></span></div>
		</div>
	</div>
	<div class=""></div>
	<?php include("inc/header.php"); ?>
	
	<div id="workshop-list">
		<article id="w1" class="workshop workshop-left">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 main-info">
						<h2>Desarrolla front-end like a boss aprendiendo Bootstrap 3</h2>
						<p>Disfruta de un fin de semana diferente aprendiendo con <a href="#">Christian D. Rodriguez</a> y <a href="#">Daniel A. Gerrero</a>.</p>
						<a href="detail.php" class="btn btn-custom">ME APUENTO!</a>
						<a href="detail.php" class="more-info-link">quiero mas informacion</a>
					</div>
					<div class="col-xs-4 col-offset-3 date-info">
						<h3 class="highlighted"><strong>W21</strong> 13/14 de abril</h3>
						<h3 class="highlighted">20 plazas</h3>
						<h3 class="highlighted">$100</h3>
					</div>
				</div>
			</div>
		</article>
		<article id="w2" class="workshop workshop-right">
			<div class="container">
				<div class="row">
				<div class="col-xs-4 date-info">
						<h3 class="highlighted"><strong>W38</strong> 19/20 de abril</h3>
						<h3 class="highlighted">15 plazas</h3>
						<h3 class="highlighted">$140</h3>
					</div>
					<div class="col-xs-6 col-offset-2 main-info">
						<h2>Desarrolla aplicaciones multiplataforma con Adobe AIR</h2>
						<p>Sorpréndete de lo fácil que puede ser crear apps para iOS y Android con este
						workshop impartido por <a href="#">Christian D. Rodríguez</a>.</p>
						<a href="detail.php" class="more-info-link">quiero mas informacion</a>
						<a href="detail.php" class="btn btn-custom">ME APUENTO!</a>
					</div>
				</div>
			</div>
		</article>
	</div>

	<?php include("inc/footer.php"); ?>
	<?php include("inc/footer_common.php"); ?>
</body>
</html>