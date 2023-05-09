<?php  
		if (isset($_GET["id"])) {
			$id=$_GET["id"];

			require("conexion.php");

			$eliminar=mysqli_query($conexion, "DELETE FROM libros WHERE id='$id'");
			header('Location: pagina-inicio-admin.php');
		}
	?>
