<?php
    require_once("cabecera.inc");
    require_once("inicio.inc");
?>
		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="busqueda.php">B&uacute;squeda</a></li>
				<li><a href="registro.php">Registro</a></li>
				<li><a href="inicio_sesion.php">Iniciar sesi&oacute;n</a></li>
			</ul>
			<form name="busqueda" class="buscador" action="res_busqueda.php" method="post">
				<input type="search" name="buscar" placeholder="Buscar">
                <input class="puntero_mano" type="submit" name="Enviar">
			</form>
		</nav>

		<section class="menu_user_logeado">
			<h2>Resultado del resgistro:</h2>
			
			<ul>
				<?php
					$usu = $_POST["usu"];
					$contra = $_POST["contra"];
					$contra1 = $_POST["contra1"];
					$correo = $_POST["correo"];
					$sexo = $_POST["sex"];
					$fnac = $_POST["fecha"];
					$pais = $_POST["pais"];
					$city = $_POST["ciud"];

					if ($contra == $contra1) {
						echo "<li>Nombre de usuario: ".$usu."</li>";
						echo "<li>Contraseña: ".$contra."</li>";
						echo "<li>Correo electrónico: ".$correo."</li>";

						if (!empty($sexo)) {
							if ($sexo == 1) {
								$sexo = "Mujer";
							} elseif ($sexo == 2) {
								$sexo = "Hombre";
							} elseif ($sexo == 3) {
								$sexo = "Otro";
							} elseif ($sexo == 4) {
								$sexo = "Prefiero no decirlo";
							}
							echo "<li>Sexo: ".$sexo."</li>";
						}
						if (!empty($fnac)) {
							echo "<li>Fecha de nacimiento: ".$fnac."</li>";
						}
						if (!empty($pais)) {
							if ($pais == 1) {
								$pais = "España";
							} elseif ($pais == 2) {
								$pais = "Francia";
							} elseif ($pais == 3) {
								$pais = "Alemania";
							}
							echo "<li>País de residencia: ".$pais."</li>";
						}
						if (!empty($city)) {
							if ($city == 1) {
								$city = "Álava";
							} elseif ($city == 2) {
								$city = "Albacete";
							} elseif ($city == 3) {
								$city = "Alicante";
							}
							echo "<li>Ciudad: ".$city."</li>";
						}
					} else {
						echo "<p>Las contraseñas introducidas no coinciden, por favor vuelve a intentarlo</p>";
					}
				?>
			</ul>
		</section>
<?php
    require_once("pie.inc");
?>