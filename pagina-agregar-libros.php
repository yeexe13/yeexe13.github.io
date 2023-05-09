<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Disponibilidad</title>
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
	<h2>SySry Registrar</h2>
	<hr> 

	<h1 style="text-align: center;"> Editar Disponibilidad </h1>
	<br>
	

	<form action="#" method="POST" id="Formulario" style="margin-left: 580px; box-shadow: 5px 5px 0px #ccc; margin-right: 600px;">	
	
	<input style="text-align: center;" type="text" class="Autor(a)" placeholder="Nombre del Autor(a)" name="autor" required><br>
	<p>
	<input style="text-align: center;" type="text" class="Libro" placeholder="Nombre del Libro" name="libro" required>
	<p>
	<input style="text-align: center;" type="number" class="Cantidad" placeholder="Cantidad" name="cantidad" required>
	<p>
	
	<input style="margin-left: 100px;" type="submit" value="Enter" name="enviar"></input>
	
	</form>
	
<br>

<?php 
					include('conexion.php');
	
		if (isset($_POST['enviar'])) {
			$autor=$_POST['autor'];
			$libro=$_POST['libro'];
			$cantidad=$_POST['cantidad'];

			echo "<div class='col-md-12 sec-title colored text-center thm-btn' id='msj'>";

			printf('Libro registrado con éxito');
			 		$agregar=mysqli_query($conexion, "INSERT INTO libros VALUES (NULL, '$autor', '$libro', 'NULL', '$cantidad')");

			echo "</div>";
		}
?>
<a href="pagina-inicio-admin.php" style="text-align: center;"> Ver tabla </a>

</body>
</html>