﻿<!DOCTYPE html>
<html lang="es">
	<head >
		<meta charset="utf-8">
		<meta name = "description" content="Web de fotos">
		<title>Fotos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" title="Estilo principal">
        <link rel="stylesheet" type="text/css" href="estilo_imprimir.css" media="print">
        <link rel="alternate stylesheet" type="text/css" href="estilo_accesible.css" media="screen" title="Estilo accesible">
        <link rel="alternate stylesheet" type="text/css" href="estilo_clasico.css" media="screen" title="Estilo clásico">
	</head>

	<body>
		<header id="header">
			<figure> 
				<a title="Logotipo" href="index.html"><img src="logo.png" width="180" height="200" alt="Logotipo de la web" ></a>
			</figure>
			<h1>PI - Pictures & images</h1>
		</header>

		<nav>
			<ul>
				<li><a href="index.html">Inicio</a></li>
				<li><a href="busqueda.html">B&uacute;squeda</a></li>
			</ul>
			<form name="busqueda" class="buscador" action="res_busqueda.php">
				<input type="search" placeholder="Buscar">
                <input class="puntero_mano" type="submit" name="Enviar">
			</form>
		</nav>

		<section>
            <h2>Resultado de la b&uacute;squeda:</h2>
            <?php
                $tit = $_POST["tit"];
                $fecha1 = $_POST["date1"];
                $fecha2 = $_POST["date2"];
                $pais = $_POST["pais"];

                if (!empty($tit)) {
                    echo "<p><b>Título: ".$tit."</b></p>";
                }
                if (!empty($fecha1)) {
                    echo "<p><b>Desde: ".$fecha1."</b></p>";
                }
                if (!empty($fecha2)) {
                    echo "<p><b>Hasta: ".$fecha2."</b></p>";
                }
                if (!empty($pais)) {
                    if ($pais == 1) {
                        $pais = "España";
                    } elseif ($pais == 2) {
                        $pais = "Francia";
                    } elseif ($pais == 3) {
                        $pais = "Alemania";
                    }
                    echo "<p><b>País: ".$pais."</b></p>";
                }
            ?>
            <div>
                <article>
                    <p>T&iacute;tulo de la foto</p>
                    <figure>
                        <a title="Imagen temporal" href="detalle.php?id=1"><img src="camaleon2.jpg" alt="Imagen temporal" width=100% height=100%></a>
                    </figure>
                    <footer>
                        <p>Fecha | Pa&iacute;s</p>
                    </footer>
                </article>

                <article>
                    <p>T&iacute;tulo de la foto</p>
                    <figure>
                        <a title="Imagen temporal" href="detalle.php?id=2"><img src="camaleon2.jpg" alt="Imagen temporal" width=100% height=100%></a>
                    </figure>
                    <footer>
                        <p>Fecha | Pa&iacute;s</p>
                    </footer>
                </article>

                <article>
                    <p>T&iacute;tulo de la foto</p>
                    <figure>
                        <a title="Imagen temporal" href="detalle.php?id=3"><img src="camaleon2.jpg" alt="Imagen temporal" width=100% height=100%></a>
                    </figure>
                    <footer>
                        <p>Fecha | Pa&iacute;s</p>
                    </footer>
                </article>

                <article>
                    <p>T&iacute;tulo de la foto</p>
                    <figure>
                        <a title="Imagen temporal" href="detalle.php?id=4"><img src="camaleon2.jpg" alt="Imagen temporal" width=100% height=100%></a>
                    </figure>
                    <footer>
                        <p>Fecha | Pa&iacute;s</p>
                    </footer>
                </article>

                <article>
                    <p>T&iacute;tulo de la foto</p>
                    <figure>
                        <a title="Imagen temporal" href="detalle.php?id=5"><img src="camaleon2.jpg" alt="Imagen temporal" width=100% height=100%></a>
                    </figure>
                    <footer>
                        <p>Fecha | Pa&iacute;s</p>
                    </footer>
                </article>

                <article>
                    <p>T&iacute;tulo de la foto</p>
                    <figure>
                        <a title="Imagen temporal" href="detalle.php?id=6"><img src="camaleon2.jpg" alt="Imagen temporal" width=100% height=100%></a>
                    </figure>
                    <footer>
                        <p>Fecha | Pa&iacute;s</p>
                    </footer>
                </article>
            </div>
		</section>

		<footer>
			<p>Mario D&iacute;az-Ufano Nuevo / Antonio Hern&aacute;ndez Velasco | DAW / Ingenier&iacute;a Multimedia / UA | <span>&copy;</span><time datetime="2018">2018</time><a href="declaracion_accesibilidad.html">Accesibilidad</a><a class="enlace" href="#header">Ir arriba</a></p>
		</footer>
	</body>
</html>