<?php
require("conexion.php");

$conn = retornarConexion();

$sql = "SELECT codigo,descripcion,precio FROM articulos";
$result = $conn->query($sql);
$miresult=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($miresult);
$conn->close();
?>