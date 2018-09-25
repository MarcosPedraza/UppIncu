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


		<title>Registro</title>
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

		<br> <br>	<br>
		<h1 align="center">Registrar proyecto</h1>
		<div class="container">
			<div id="signupbox" style="margin-top:50px" class="col-sm-8 col-sm-offset-2">
				<div class="panel panel-info">

					<div class="p-3 mb-2 bg-secondary text-white">
						<div class="panel-title">Registrar proyecto</div>
					</div>

					<div class="panel-body" >

						<form class="form-horizontal" method="POST" action="guardarProyecto.php" autocomplete="off" enctype="multipart/form-data">

							<div id="signupalert" style="display:none" class="alert alert-danger">
								<p>Error:</p>
								<span></span>
							</div>

							<div class="form-group">
								<label for="nombre" class="col-md-8 control-label">Nombre del proyecto:</label>
								<div class="col-md-12">
									<input type="text" class="form-control" id="Pnombre" name="Pnombre" placeholder="Nombre" required >
								</div>
							</div>

							<div class="form-group">
								<label for="apellidos" class="col-md-9 control-label">Nombre del responsable del proyecto:</label>
								<div class="col-md-12">
									<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre y apellidos" required >
								</div>
							</div>

							<div class="form-group">
								<label for="apellidos" class="col-md-3 control-label">Dirección:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección" required >
								</div>
							</div>

							<div class="form-group">
								<label for="apellidos" class="col-md-3 control-label">Colonia:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="colonia" id="colonia" placeholder="Colonia" required >
								</div>
							</div>

							<div class="form-group">
								<label for="apellidos" class="col-md-3 control-label">Municipio:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="municipio" id="municipio" placeholder="Municipio" required >
								</div>
							</div>

							<div class="form-group">
								<label for="apellidos" class="col-md-3 control-label">C.P.:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="cp" id="cp" placeholder="C.P." required >
								</div>
							</div>

							<div class="form-group">
								<label for="apellidos" class="col-md-3 control-label">Estado:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="estado" id="estado" placeholder="Estado" required >
								</div>
							</div>

							<div class="form-group">
								<label for="apellidos" class="col-md-3 control-label">Telefono:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" required >
								</div>
							</div>

							<div class="form-group">
								<label for="apellidos" class="col-md-3 control-label">Correo electronico:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="email" id="email" placeholder="Correo electronico" required >
								</div>
							</div>

							<div class="form-group">
								<label for="apellidos" class="col-md-3 control-label">Procedencia:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="procedencia" id="procedencia" placeholder="Procedencia" required >
								</div>
							</div>
              <br><br><br><br>
              <div class="form-group">
								<label for="apellidos" class="col-md-9 control-label">¿Hay mas personas involucradas en el proyecto?</label>
							</div>

							<div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="involu" id="involu" value="Si">
                <label class="form-check-label" for="exampleRadios2">
                Si
                </label>
              </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="involu" id="involu" value="No">
              <label class="form-check-label" for="exampleRadios2">
              No
             </label>
            </div>
              <br><br><br><br>
							<div class="form-group">
								<label for="apellidos" class="col-md-9 control-label">Su proyecto está constituido legalmente como empresa</label>
							</div>

							<div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="legal" id="legal" value="No">
                <label class="form-check-label" for="exampleRadios2">
                No
                </label>
              </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="legal" id="legal" value="En proceso">
              <label class="form-check-label" for="exampleRadios2">
              En proceso
             </label>
            </div>

						<div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="legal" id="legal" value="Si">
              <label class="form-check-label" for="exampleRadios2">
              Si
             </label>
            </div>
            <br><br><br>
						<div class="form-group">
							<label for="apellidos" class="col-md-6 control-label">Sector</label>
						</div>

						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="sector" id="sector" value="Industrial">
							<label class="form-check-label" for="exampleRadios2">
							Industrial
							</label>
						</div>

					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="sector" id="sector" value="Comercio">
						<label class="form-check-label" for="exampleRadios2">
						Comercio
					 </label>
					</div>

					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="sector" id="sector" value="Servicios">
						<label class="form-check-label" for="exampleRadios2">
						Servicios
					 </label>
					</div>
          <br><br><br><br>
					<div class="form-group">
						<label for="apellidos" class="col-md-9 control-label">Seleccione como maximo dos sectores a los que pertenece </label>
					</div>

						<div class="col-md-9">
							<label for="apellidos" class="col-md-3 control-label">Sector 1:</label>

							<select multiple class="form-control" name="sector1" value="<?php if(isset($sector1)) echo $sector1; ?>">
								<option value="0">Ninguno</option>
								<option value="1">Aeronáutica</option>
								<option value="2">Agroindustria</option>
								<option value="3">Alimentos</option>
								<option value="4">Automotriz</option>
								<option value="5">Biónica</option>
								<option value="6">Biotecnología</option>
								<option value="7">Construcción</option>
								<option value="8">Cosmetología</option>
								<option value="9">Dessarrollo Social</option>
								<option value="10">Electrónica</option>
								<option value="11">Medio Ambiente</option>
								<option value="12">Metalmecánica</option>
								<option value="13">Productos Natureles</option>
								<option value="14">Robótica</option>
								<option value="15">Salud</option>
								<option value="16">Tecnologías de la Información (Software, Multimedia, etc.)</option>
								<option value="17">Tecnologías de Aprendizaje</option>
								<option value="18">Turismo</option>
								<option value="19">Deporte</option>
								<?php
								if($sector1=="Ninguno"){
									echo $sector1 = "Ninguno";}
									else if($sector1=="Aeronáutica"){
										echo $sector1 = "Aeronáutica";}
										else if($sector1=="Agroindustria"){
											echo $sector1 = "Agroindustria";}
											else if($sector1=="Alimentos"){
												echo $sector1 = "Alimentos";}
												else if($sector1=="Automotriz"){
													echo $sector1 = "Automotriz";}
													else if($sector1=="Biónica"){
														echo $sector1 = "Biónica";}
														else if($sector1=="Biotecnología"){
															echo $sector1 = "Biotecnología";}
															else if($sector1=="Construcción"){
																echo $sector1 = "Construcción";}
																else if($sector1=="Cosmetología"){
																	echo $sector1 = "Cosmetología";}
																	else if($sector1=="Desarrollo Social"){
																		echo $sector1 = "Dessarrollo Social";}
																		else if($sector1=="Electrónica"){
																			echo $sector1 = "Electrónica";}
																			else if($sector1=="Medio Ambiente"){
																				echo $sector1 = "Medio Ambiente";}
																				else if($sector1=="Metalmecánica"){
																					echo $sector1 = "Metalmecánica";}
																					else if($sector1=="Productos Natureles"){
																						echo $sector1 = "Productos Natureles";}
																						else if($sector1=="Robótica"){
																							echo $sector1 = "Robótica";}
																							else if($sector1=="Salud"){
																								echo $sector1 = "Salud";}
																								else if($sector1=="Tecnologías de la Información(Software, Multimedia, Etc.) "){
																									echo $sector1 = "Tecnologías de la Información(Software, Multimedia, Etc.) ";}
																									else if($sector1=="Tecnologías del Aprendizaje"){
																										echo $sector1 = "Tecnologías del Aprendizaje";}
																										else if($sector1=="Turismo"){
																											echo $sector1 = "Turismo";}
																											else if($sector1=="Deporte"){
																												echo $sector1 = "Deporte";}


									?>
              </select>

						</div>
						<div class="col-md-9">
							<label for="apellidos" class="col-md-3 control-label">Sector 2:</label>
							<select multiple class="form-control" name="sector2" value="<?php if(isset($sector2)) echo $sector2; ?>">
							<option value="1">Ninguno</option>
							<option value="0">Aeronáutica</option>
							<option value="0">Agroindustria</option>
							<option value="0">Alimentos</option>
							<option value="0">Automotriz</option>
							<option value="0">Biónica</option>
							<option value="0">Biotecnología</option>
							<option value="0">Construcción</option>
							<option value="0">Cosmetología</option>
							<option value="0">Dessarrollo Social</option>
							<option value="0">Electrónica</option>
							<option value="0">Medio Ambiente</option>
							<option value="0">Metalmecánica</option>
							<option value="0">Productos Natureles</option>
							<option value="0">Robótica</option>
							<option value="0">Salud</option>
							<option value="0">Tecnologías de la Información (Software, Multimedia, etc.)</option>
							<option value="0">Tecnologías de Aprendizaje</option>
							<option value="0">Turismo</option>
							<option value="0">Deporte</option>
								<?php
								if($sector2=="Ninguno"){
								 echo $sector2 = "Ninguno";}
								 else if($sector2=="Aeronáutica"){
									 echo $sector2 = "Aeronáutica";}
									 else if($sector2=="Agroindustria"){
										 echo $sector2 = "Agroindustria";}
										 else if($sector2=="Alimentos"){
											 echo $sector2 = "Alimentos";}
											 else if($sector2=="Automotriz"){
												 echo $sector2 = "Automotriz";}
												 else if($sector2=="Biónica"){
													 echo $sector2 = "Biónica";}
													 else if($sector2=="Biotecnología"){
														 echo $sector2 = "Biotecnología";}
														 else if($sector2=="Construcción"){
															 echo $sector2 = "Construcción";}
															 else if($sector2=="Cosmetología"){
																 echo $sector2 = "Cosmetología";}
																 else if($sector2=="Desarrollo Social"){
																	 echo $sector2 = "Dessarrollo Social";}
																	 else if($sector2=="Electrónica"){
																		 echo $sector2 = "Electrónica";}
																		 else if($sector2=="Medio Ambiente"){
																			 echo $sector2 = "Medio Ambiente";}
																			 else if($sector2=="Metalmecánica"){
																				 echo $sector2 = "Metalmecánica";}
																				 else if($sector2=="Productos Natureles"){
																					 echo $sector2 = "Productos Natureles";}
																					 else if($sector2=="Robótica"){
																						 echo $sector2 = "Robótica";}
																						 else if($sector2=="Salud"){
																							 echo $sector2 = "Salud";}
																							 else if($sector2=="Tecnologías de la Información(Software, Multimedia, Etc.) "){
																								 echo $sector2 = "Tecnologías de la Información(Software, Multimedia, Etc.) ";}
																								 else if($sector2=="Tecnologías del Aprendizaje"){
																									 echo $sector2 = "Tecnologías del Aprendizaje";}
																									 else if($sector2=="Turismo"){
																										 echo $sector2 = "Turismo";}
																										 else if($sector2=="Deporte"){
																											 echo $sector2 = "Deporte";}
									?>
              </select>
						</div>


					<br><br><br><br>
					<div class="form-group">
						<label for="apellidos" class="col-md-9 control-label">Por qué medio por el que se enteró del UPINNEM</label>
					</div>

					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="medio" id="medio" value="Universidad Politecnica de Pachuca">
						<label class="form-check-label" for="exampleRadios2">
						Universidad Politecnica de Pachuca
						</label>
					</div>

				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="medio" id="medio" value="Secretaría de Desarrollo Económico (análoga)">
					<label class="form-check-label" for="exampleRadios2">
					Secretaría de Desarrollo Económico (análoga)
				 </label>
				</div>

				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="medio" id="medio" value="Redes sociales">
					<label class="form-check-label" for="exampleRadios2">
					Redes sociales
				 </label>
				</div>

				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="medio" id="medio" value="otro">
					<label class="form-check-label" for="exampleRadios2">
					Otro(especificar)
				 </label>
				</div>
				<div class="col-md-9">
					<input type="text" class="form-control" name="otro" id="otro">
				</div>
				<br> <br> <br><br>
				<div class="form-group">
					<label for="apellidos" class="col-md-8 control-label">Documentacion de identificación</label>
				</div>


				<div class="form-group">
				<label class=" control-label">Identificación oficial (1 MB)</label>
        <input type="file" name="identificacion" id="identificacion" accept="application/pdf">
				<label class=" control-label">Comprobante de domicilio (Preferentemente dónde se tendrá el domicilio fiscal, 1MB)</label>
        <input type="file" name="domicilio" id="domicilio"  accept="application/pdf" >
				</div>



									<div class="form-group">
										<div class=" col-md-offset-3 col-md-12">
											<button id="btn-signup" type="submit" class="btn btn-primary"><i class="icon-hand-right"></i>Continuar</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
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
