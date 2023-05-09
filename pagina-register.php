<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
<body>
	<style>
		 input, form {
			padding: 5px 10px;
			border: 1px solid;
			border-radius: 3px;
			font-size: 20px;
		}

		a:link { 
			color:#FB0000;
			text-decoration:none;
			display:block;
			margin:auto;
			background-color: #000
			 }
		a:visited { color:#00DDFB }
		a:focus { outline: 1px dotted #000; }
		a:hover {
			text-decoration:underline;
			color:#00FB0B ;
			background-color: #000;
		}
		a:active {
			color:#1300FB;
		}

	</style>
	<h2>SySry Registrar</h2>
	<hr> 

	<h1 style="text-align: center;">Registro</h1>
	<br>
	

	<form action="#" method="POST" id="Formulario" style="margin-left: 580px; box-shadow: 5px 5px 0px #ccc; margin-right: 600px;">	
	
	<input style="text-align: center;" type="text" class="usuario" placeholder="usuario" name="usuario" required><br>
	<p>
	<input style="text-align: center;" type="password" class="contrasena" placeholder="password" name="password" required>
	<p>
	<input style="text-align: center;" type="password" class="contrasena" placeholder="confirm password" name="password2" required>
	<p>
	
	<input style="margin-left: 100px;" type="submit" value="Enter" name="enviar"></input>

	<p>
	<a href="index.php" style="text-align: center;"> Iniciar Sesion </a>
	
	</form>
	
<br>

<?php 
					include('conexion.php');
	
		if (isset($_POST['enviar'])) {
			$usuario=$_POST['usuario'];
			$password=$_POST['password'];
			$password2=$_POST['password2'];
			$permisos='Us';
			

			$orden="SELECT * FROM usuarios WHERE usuario='$usuario'";
			$consulta=mysqli_query($conexion, $orden);
			$coincidencias=mysqli_num_rows($consulta);
			echo "<div class='col-md-12 sec-title colored text-center thm-btn' id='msj'>";
			 if ($coincidencias==NULL) {
			 	if ($password==$password2) {
			 		printf('El usuario ha sido registrado con éxito');
			 		$agregar=mysqli_query($conexion, "INSERT INTO usuarios VALUES (NULL, '$usuario', '$password', '$permisos')");
			 	}else {
			 		printf('Las contraseñas no coinciden');
			 	}
			 	
			 }else{
			 	printf('Usuario existente, intente de nuevo');
			 	
			 }
			//printf('Los datos se han modificado correctamente');
			echo "</div>";
		}
		
?>

</body>
</html>