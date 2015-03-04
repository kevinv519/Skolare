<!DOCTYPE html>
<html lang="es">
<head>
	<title>Skolare</title>
	<?php include 'inc/head_estilos.php'; ?>
</head>
<body>
	<?php include 'inc/header_menu.php'; ?>

	<!-- Encabezado -->
	<div id="encabezado1" class="container-fluid jumbotron imagenEncabezado texto-blanco">
		<h1>Skolare</h1>
		<p>La educación nunca estuvo tan cerca</p>
		<a href="pags/nosotros.php" class="btn btn-animacion btn-blanco">Leer más &raquo;</a>
	</div>
	<!-- Fin de encabezado -->

	<!-- Seccion informacion Skolare -->
	<div class="container">
		<h1 class="text-center titulo-lg titulo-sb">Conociendo Skolare</h1><br>
		<div class="row">
			<div class="col-sm-3">
				<img src="img/index/imgSec1.png" class="img-circle img-responsive center-block" id="ImagenSeccion">
				<h3 class="text-center">Educación</h3>
				<p class="text-justify p">Para Skolare la base de la sociedad es la educación, por eso nos esforzamos en ofrecerte la mejor información de instituciones.</p>
			</div>
			<div class="col-sm-3">
				<img src="img/index/imgSec2.png" class="img-circle img-responsive center-block" id="ImagenSeccion">
				<h3 class="text-center">Accesibilidad</h3>
				<p class="text-justify p">¿Te imaginas toda la información en un solo sitio? Esto ya es una realidad, puedes comprobar las instuciones afiliadas <a href="#">aquí.</a></p>
			</div>
			<div class="col-sm-3">
				<img src="img/index/imgSec3.png" class="img-circle img-responsive center-block" id="ImagenSeccion">
				<h3 class="text-center">Ubicación</h3>
				<p class="text-justify p">Pronto estaremos en todos los lugares del mundo, ofreciendo la diversidad de centros educativos que nos caracteriza.</p>
			</div>
			<div class="col-sm-3">
				<img src="img/index/imgSec4.png" class="img-circle img-responsive center-block" id="ImagenSeccion">
				<h3 class="text-center">Filtros</h3>
				<p class="text-justify p">Con los filtros eres capaz de encontrar exactamente lo que buscas, de forma que tengas las mejores opciones, la decisión queda en ti.
				</p>
			</div>
		</div>
	</div><br>
  	<!-- Fin Seccion informacion Skolare -->

  	<!-- Seccion nuevas instituciones -->
  	<div class="container-fluid texto-blanco" id="seccionAqua">
	  	<div class="container">
	  		<h1 class="text-center titulo-lg">INSTITUCIONES RECIENTES</h1><br>
	      <div class="row">
				<div class="col-sm-4">
					<img src="img/index/Logo ITR.jpg" class="img-circle img-responsive center-block" id="ImagenSeccion">
					<h3 class="text-center" id="TituloSeccion">Instituto Técnico Ricaldone</h3>
					<p class="text-justify p texto-gris">El Instituto Técnico Ricaldone se une a Skolare.com, ofreciendo uno de los niveles de educación más alto a nivel de El Salvador, con excelentes planes educativos para los jóvenes.</p>
					<p class="text-center"><a class="btn btn-danger">Leer más</a></p><br>
				</div>
				<div class="col-sm-4">
					<img src="img/index/Logo LLL.jpg" class="img-circle img-responsive center-block" id="ImagenSeccion">
					<h3 class="text-center" id="TituloSeccion">Liceo Ladislao Leiva</h3>
					<p class="text-justify p texto-gris">Una institución educativa cristiana que busca a través de Cristo la excelencia académica. Se enfoca en hacer del joven un profesional que alcance el éxito y la realización personal.</p>
					<p class="text-center"><a class="btn btn-danger">Leer más</a></p><br>
				</div>
				<div class="col-sm-4">
					<img src="img/index/Logo CSC.png" class="img-circle img-responsive center-block" id="ImagenSeccion">
					<h3 class="text-center" id="TituloSeccion">Colegio Santa Cecilia</h3>
					<p class="text-justify p texto-gris">El Colegio Santa Cecilia ofrece un ambiente 100% educativo y de convivencia, para formar jóvenes con valores y amplios conocimientos, con el metodo educativo de Don Bosco.</p>
					<p class="text-center"><a class="btn btn-danger">Leer más</a></p><br>
				</div>
	  		</div>
	  	</div>
	</div>
  	<!-- Fin seccion nuevas instituciones -->
  	<?php include 'inc/footer.php' ?>
	<?php include 'inc/body_scripts.php'; ?>
</body>
</html>