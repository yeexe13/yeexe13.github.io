<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Premiere Page</title>
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
	<h2>SySry Login</h2>
	<hr> 

	<h1 style="text-align: center;">Welcome / Bienvenido / Bienvenue</h1>
	<br>
	

	<form action="#" method="POST" id="Formulario" style="margin-left: 580px; box-shadow: 5px 5px 0px #ccc; margin-right: 600px;">	
	
	<input style="text-align: center;" type="text" class="usuario" placeholder="usuario" name="usuario" required><br>
	<p>
	<input style="text-align: center;" type="password" class="contrasena" placeholder="password" name="password" required>
	<p>

	<input style="margin-left: 0px; margin-right: 90px;" type="submit" value="Login" name="enviar"></input>

	<input type="reset" value="Restart" name=""></input>
	
	</form>
	<?php  
				include("conexion.php");

				if (isset($_POST["enviar"])) {
					$usuario=$_POST["usuario"];
					$password=$_POST["password"];


					$orden="SELECT usuario FROM usuarios WHERE usuario='$usuario'";

					$consulta=mysqli_query($conexion, $orden);
					$coincidencias=mysqli_num_rows($consulta);

					if ($coincidencias) {
						$orden="SELECT * FROM usuarios WHERE usuario='$usuario' and password='$password'";
						$consulta=mysqli_query($conexion, $orden);
						$coincidencias=mysqli_num_rows($consulta);
						
						if ($coincidencias) {
							echo "el usuario y la contraseña son correctos";
							$fila=mysqli_fetch_array($consulta);
							$_SESSION["nombre"]=$fila["nombre"];
							$_SESSION["usuario"]=$fila["usuario"];
							$orden="SELECT usuario FROM usuarios WHERE usuario='$usuario' and permisos='Ad'";
							$consulta=mysqli_query($conexion, $orden);
							$coincidencias=mysqli_num_rows($consulta);
							if ($coincidencias) {
								//echo "el usuario es administrador";
								$_SESSION["permisos"]="Ad";
								echo "<script>location.href='pagina-rutas.php';</script>";
									die();
								//header('Location: siAdmin.php');
							}else{
								$_SESSION["permisos"]="Us";
								//echo "el usuario no es administrador";
								//header('Location: /siDoctores.php');
								echo "<script>location.href='pagina-inicio.php';</script>";
									die();
							}
						}else{
							echo "La contraseña ingresada es incorrecta";
						}
						

					}else{
						echo "El usuario ingresado no existe";
					}
				}				
			?>
<br>

	<div class="verde" style="text-align: center;">
		<a href="pagina-register.php"><strong>Registrarse</strong></a>
	</div>

	<center><img src="gallery/bienvenida.png" style="width: 80%;" alt="centered image"></center>


</body>
</html>