<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validar formulario</title>
	<style>
		body{background-color: #264673; box-sizing: border-box; font-family: Arial;}

		form{
			background-color: white;
			padding: 10px;
			margin: 50px auto;
			width: 400px;
		}

		input[type=text], input[type=password]{
			padding: 10px;
			width: 380px;
		}
		input[type="submit"]{
			border: 0;
			background-color: #ED8824;
			padding: 10px 20px;
		}

		.error{
			background-color: #FF9185;
			font-size: 12px;
			padding: 10px;
		}
		.correcto{
			background-color: #A0DEA7;
			font-size: 12px;
			padding: 10px;
		}
	</style>
</head>
<body>
	<form action="formulario.php" method="POST">
		<?php
		// TODO (1) DECLARAMOS LAS VARIABLES
		$nombre = "";
		$password = "";
		$email = "";
		$pais = "";
		$nivel = "";
		$lenguajes = array ();
			
			if(isset($_POST['nombre'])){
				$nombre = $_POST['nombre'];
				$password = $_POST['password'];
				$email = $_POST['email'];
				$pais = $_POST['pais'];
				
				// TODO (2) ASIGNAR VALORES DE LA SOLICITUD POST

				if(isset($_POST['nivel'])){
					$nivel = $_POST['nivel'];
				} else {
					$nivel = "";
				}

				if (isset($_POST['lenguajes'])) {
					$lenguajes = $_POST['lenguajes'];
				} else {
					$lenguajes = "";
				}

				$campos = array();

				if($nombre == ""){
					array_push($campos, "El campo Nombre no pude estar vacío");
				}

				if($password == "" || strlen($password) < 6){
					array_push($campos, "El campo Password no puede estar vacío, ni tener menos de 6 caracteres.");
				}

				if($email == "" || strpos($email, "@") === false){
					array_push($campos, "Ingresa un correo electrónico válido.");
				}

				if($pais == ""){
					array_push($campos, "Selecciona un pais de origen.");
				}

				// TODO (3) VALIDAR QUE EL CAMPO NO ESTE VACIO

				if($nivel == ""){
					array_push($campos, "Selecciona un nivel de desarrollo.");
				}

				if($lenguajes == "" || count($lenguajes) < 2){
					array_push($campos, "Selecciona al menos 2 lenguajes de Programacion.");
				}

				if(count($campos) > 0){
					echo "<div class='error'>";
					for($i = 0; $i < count($campos); $i++){
						echo "<li>".$campos[$i]."</i>";
					}
				} else{
					echo "<div class='correcto'>
							Datos correctos";
				}
				echo "</div>";
			}
		?>
		<p>
		Nombre:<br/>
		<input type="text" name="nombre" value = "<?php echo $nombre; ?>">
		</p>

		<p>
		Password:<br/>
		<input type="password" name="password" value = "<?php echo $password; ?>">
		</p>

		<p>
		Correo electrónico:<br/>
		<input type="text" name="email" value = "<?php echo $email; ?>">
		</p>

		<p>
			Pais de Origen: <br>
			<select name="pais" id="">
				<option value="">Selecciona un Pais</option>
				<option value="mx" <?php if($pais == "mx") echo "selected"?>>Mexico</option>
				<option value="eu" <?php if($pais == "eu") echo "selected"?>>Estados Unidos</option>
				<option value="es" <?php if($pais == "es") echo "selected"?>>España</option>
				<option value="ar" <?php if($pais == "ar") echo "selected"?>>Argentina</option>
				<option value="ch" <?php if($pais == "ch") echo "selected"?>>China</option>
			</select>
		</p>

		<p>
			Nivel de Desarrollo: <br>
			<input type="radio" name="nivel" value ="Principiante" <?php if($nivel == "Principiante") echo "checked";?>>Principiante
			<input type="radio" name="nivel" value ="Intermedio" <?php if($nivel == "Intermedio") echo "checked";?>>Intermedio
			<input type="radio" name="nivel" value ="Avanzado" <?php if($nivel == "Avanzado") echo "checked";?>>Avanzado
		</p>

		<p>
			Lenguajes de Programacion: <br>
			<input type="checkbox" name="lenguajes[]" value ="php" <?php if(in_array("php", $lenguajes)) echo "checked";?>>PHP <br>
			<input type="checkbox" name="lenguajes[]" value ="js" <?php if(in_array("js", $lenguajes)) echo "checked";?>>JavaScript <br>
			<input type="checkbox" name="lenguajes[]" value ="java" <?php if(in_array("java", $lenguajes)) echo "checked";?>>Java <br>
			<input type="checkbox" name="lenguajes[]" value ="phyton" <?php if(in_array("phyton", $lenguajes)) echo "checked";?>>Phyton <br>
			<input type="checkbox" name="lenguajes[]" value ="swift" <?php if(in_array("swift", $lenguajes)) echo "checked";?>>Swift <br>
		</p>

		<p><input type="submit" value="Enviar datos"></p> 
	</form>
</body>
</html>