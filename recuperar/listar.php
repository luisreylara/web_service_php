<?php 
	header('Content-Type: application/json');
	echo "entro";
	require("conexion.php");
	$conexion= retornarConexion();
	echo "se conecto";
	datos=mysql_query($conexion,"select * from articulos");
	$resultado= mysqli_fetch_all($datos,MYSQLI_ASSOC);
	echo json_encode($resultado);
?>