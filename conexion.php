<?php 
$servidor="localhost";
$usuarios="root";
$password="";
$base="proyecto";

$conexion=mysqli_connect("$servidor", "$usuarios", "$password") or die();

$base=mysqli_select_db($conexion, $base);

	mysqli_query($conexion, "SET NAMES 'utf8'");

?>