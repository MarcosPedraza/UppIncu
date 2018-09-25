<?php

$folio = $_GET['id'];

?>

<html>
	<head>

		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-100554272-8"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-100554272-8');
</script>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<meta name="description" content="Universidad Politécnica de Pachuca">
<meta name="author" content="DTIC's">

<title>Universidad Politécnica de Pachuca - UPPachuca</title>

<link rel="icon" href="http://www.upp.edu.mx/lib18/images/favicon.ico">
<!-- Font Awesome -->
<link href="../lib18/vendor/components/font-awesome/css/fontawesome-all.css" rel="stylesheet">
<!-- Bootstrap core CSS -->
<link href="../lib18/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Estilo SEP HIDALGO -->
<link href="../lib18/seph/style.css" rel="stylesheet">
<!-- Estilo para el boton flotante que te lleva arriba-->
<link href="../lib18/coreFRONTx/10boton-arriba/estilo.css" rel="stylesheet">


<!-- Para centrar los iconos y featurette-divider 80-->
<link href="../dotk/05main/01iconos/iconos-centrados.css" rel="stylesheet">
<!-- Eventos de difusion de comunicacion social -->
<link href="../dotk/05main/02prensa/rmbc.css" rel="stylesheet">

		<title>Fin</title>
		<link rel="stylesheet" href="../css/bootstrap.min.css" >
		<link rel="stylesheet" href="../css/bootstrap-theme.min.css" >
		<script src="../js/bootstrap.min.js" ></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	</head>

	<body >

		<header>
    <!-- Logos e imagen de hidalgo -->
    <div class="container-fluid fixed-top" >
			<div class="row c_gob_gris">
				<div class="col-md-2 c_gob_azul">
					<img src="../lib18/seph/images/header/logo_w.png" class="img-responsive" alt="Hidalgo" />
				</div>
				<div class="col-md-6 titulo_seph">
					<h1>Universidad Politécnica de Pachuca</h1>
				</div>
				<div class="col-md-4 redes_sociales text-center">
					<a href="https://www.facebook.com/UPPachuca/"><i class="fab fa-facebook"></i></a>
					<a href="https://www.youtube.com/user/uppachuca"><i class="fab fa-youtube"></i></a>
					<a href="https://twitter.com/UPPachuca"><i class="fab fa-twitter-square"></i></a>
					<a href="https://mail.google.com/a/upp.edu.mx/"><i class="fas fa-envelope-square"></i></a>
				</div>
			</div>
		</div>
  </header>

		<h1 align="center">Proceso completado</h1>
		<div class="container">
			<div id="signupbox" style="margin-top:50px" class="col-sm-8 col-sm-offset-2">
				<div class="panel panel-info">

					<div class="p-3 mb-2 bg-secondary text-white">
						<div class="panel-title">Proyecto registrado</div>
					</div>

					<div class="panel-body" >

						<form id="signupform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off" enctype="multipart/form-data">

							<div id="signupalert" style="display:none" class="alert alert-danger">
								<p>Error:</p>
								<span></span>
							</div>

				<div class="col-md-9 col-md-offset-1">
					<label for="apellidos" class="col-md-12 control-label">Por correo electronico se te notificara si tu proyecto fue aceptado</label>
				</div>
				<div class="col-md-9 col-md-offset-1">
          	<label for="apellidos" class="col-md-7 control-label">Gracias!</label>
				</div>
				<br><br><br>
				<div class="col-md-5 col-md-offset-3">
					<br><br>
				<?php
				$folio = $_GET['id'];

				echo "<a href='pdf/ficha_ingreso_pdf.php?id=".$folio."' class='btn btn-primary btn-lg' role='button'>Generar ficha de ingreso</a>";
				//echo "<a href='pdf/ficha_aceptacion_pdf.php?id=".$folio."' class='btn btn-success btn-lg' role='button'>Generar carta intención</a>";
				?>
				</div>

                  </div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<br><br><br><br>
			</body>
			<!-- Footer -->
			<footer>
			<!-- footer de gobierno del estado -->
				<div class="container-fluid c_gob_azul" >
			<div class="row ">
				<div class="col-md-3">
					<img src="../lib18/seph/images/footer/footer_logo.png" alt="Hidalgo">
				</div>
				<div class="col-md-3">
				</div>
				<div class="col-md-4">
					<address>
						Universidad Politécnica de Pachuca<br />
						Copyright &copy; 2018<br />
						Carretera Pachuca - Cd. Sahagún km 20 Ex-Hacienda de Santa Bárbara<br />
						Zempoala Hidalgo <br />
						<img src="../lib18/images/mex.png" /> México. CP-43830 <br />
						email: <a href="mailto:upp@upp.edu.mx">upp@upp.edu.mx</a> <br />
						Tel 01 (771) 54 77 510<br />
						<!--<a href="#">Aviso de Privacidad</a>-->
					</address>
					<p>
						<a href="http://www.upp.edu.mx/lib18/">Web Master</a>
					</p>
				</div>
				<div class="col-md-2">
					<img src="../lib18/seph/images/footer/footer_escudo.png" class="center-block" alt="Hidalgo">
				</div>
			</div>
		</div>
		</footer>
</html>
