<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/consultas.css">
	<script type="text/javascript">
		function confirmacion() {
			if(confirm("¿Deseas eliminar el libro?")){
				return true;
			};return false;
		}
	</script>
</head>
<body>

<?php
printf('

	<section>
		<div class="container">
			<h2>Catalogo</h2>
		</div>
		<div class="text-center">
			
			<table>
		<thead>
			<tr>
				<th>Autor(a)</th>
				<th>Libro</th>
				<th>Cantidad</th>
			</tr>
		</thead>
		<tbody>');
		
		include("conexion.php");
				$orden="SELECT * FROM libros";
				$consulta=mysqli_query($conexion, $orden);
				
					
										while ($fila=mysqli_fetch_array($consulta)) {
					printf('
						<tr style="text-align: center; padding:0px 2em;">
							<td>%s</td>
							<td>%s</td>
							<td>%s</td>
							
						</tr>
						', $fila["Autor(a)"], $fila["Libro"], $fila["Cantidad"]);
				}
			printf('

		</tbody>
	</table>
		</div>
	</section>
');
?>
<a href="pagina-comprar.php" style="text-align: center;"> Comprar </a>

</body>
</html>