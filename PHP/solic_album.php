﻿<?php
    $title = "Solicitud de álbum";
    require_once("../Plantilla/cabecera.inc");
    require_once("../Plantilla/inicio.inc");
    session_start();
    if(isset($_COOKIE['usuario_recordado'])==false && isset($_SESSION['usuario_sesion'])==false){
      header("Location: http://localhost/DAW/PHP/index.php");
    }
?>
		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="busqueda.php">B&uacute;squeda</a></li>
			</ul>
			<form name="busqueda" class="buscador" action="res_busqueda.php" method="post">
				<input type="search" name="buscar" placeholder="Buscar">
                <input class="puntero_mano" type="submit" name="Enviar">
			</form>
		</nav>

		<section class="formularios">
			<h2>Solicita t&uacute; &aacute;lbum:</h2>

			<table style="width:40%">
				<caption>Tabla de precios para solicitar un álbum</caption>
				<details>
					<summary>Detalles de la tabla</summary>
					<p>Dependiendo del concepto escogido el precio por página varía.</p>
					<p>menos de 5 página, 0.10 euros por página, entre 5 y 10 página, 0.08 euros por página, más de once páginas, 0.07 euros por página, blanco y negro, 0 euros, color, 0.05 euros por foto, resolución mayor que 300 dpi, 0.02 euros por foto</p>
				</details>
				<tr>
					<th>Concepto</th>
					<th>Tarifa</th>
				</tr>
				<tr>
					<td> &lt; 5 p&aacute;g</td>
					<td> 0.10 € por p&aacute;g.</td>

				</tr>
				<tr>
					<td> entre 5 y 10 p&aacute;g</td>
					<td> 0.08 € por p&aacute;g.</td>
				</tr>
				<tr>
					<td> &gt; 11 p&aacute;g</td>
					<td> 0.07 € por p&aacute;g.</td>
				</tr>
				<tr>
					<td> Blanco y negro</td>
					<td> 0 €</td>
				</tr>
				<tr>
					<td> Color</td>
					<td> 0.05 € por foto</td>
				</tr>
				<tr>
					<td> Resoluci&oacute;n > 300 dpi</td>
					<td> 0.02 € por foto</td>
				</tr>
		    </table>

            <form action="res_solic_album.php" method="post">
                <label for="nomb"> Nombre(*):</label>
                <input type="text" name="nomb" id="nomb" title="M&aacute;ximo 200 caracteres." maxlength="200" required>

                <label for="tit"> T&iacute;tulo del &aacute;lbum(*):</label>
                <input type="text" name="tit" id="tit" title="M&aacute;ximo 200 caracteres." maxlength="200" required>

                <label for="dedic"> Dedicatoria o descripci&oacute;n:</label>
                <textarea rows="4" id="dedic" name="dedic" cols="50" maxlength="4000"></textarea>

                <label for="correo"> Correo del destinatario(*):</label>
                <input type="email" name="correo" id="correo" maxlength="200" required />

                <label for="pais"> Pa&iacute;s(*):</label>
                <select name="pais" id="pais">
                    <option value="0">España</option>
                    <option value="1">Alemania</option>
                    <option value="2">Francia</option>
                </select>

                <label for="prov"> Provincia/regi&oacute;n(*):</label>
                <select name="prov" id="prov">
                    <option value="0">Álava</option>
                    <option value="1">Albacete</option>
                    <option value="2">Alicante</option>
                </select>
                <label for="ciud"> Ciudad(*):</label>
                <select name="ciud" id="ciud">
                    <option value="0">Torrevieja</option>
                    <option value="1">Elche</option>
                    <option value="2">Alicante</option>
                </select>

                <label for="cod"> C&oacute;digo postal(*):</label>
                <input type="text" name="cod" id="cod" maxlength="10" required>

                <label for="direc"> Direcci&oacute;n postal(*):</label>
                <input type="text" name="direc" id="direc" placeholder="Calle, portal y piso" maxlength="200" required>

                <label for="colo"> Color de portada:</label>
                <input type="color" name="colo" id="colo">

                <label for="colo_foto"> Color de las fotos:</label>
                <select name="colo_foto" id="colo_foto">
                    <option value="0">Blanco y negro</option>
                    <option value="1">A todo color</option>
                </select>

                <label for="copias"> N&uacute;mero de copias(*):</label>
                <input type="number" name="copias" id="copias" value="1" min="1" required>

                <label for="imp"> &Aacute;lbum a imprimir(*):</label>
                <select name="imp" id="imp">
                    <option value="0">Vacaciones 2017</option>
                    <option value="1">Vacaciones 2018</option>
                    <option value="2">Mejores momentos</option>
                </select>

                <label for="res"> Resoluci&oacute;n de las fotos:</label>
                <input type="number" name="res" id="res" value="150" min="150" max="900" step="150">

                <label for="fecha">Fecha de recepci&oacute;n del &aacute;lbum:</label>
                <input type="date" name="fecha" id="fecha" required>

                <input class="puntero_mano" type="submit" value="Enviar" name="Enviar">
            </form>
		</section>
<?php
    require_once("../Plantilla/pie.inc");
?>