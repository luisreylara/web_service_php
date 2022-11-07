<?php

function retornarConexion(){
	$servername = "datamoviles.tk";
	$username = "admin_alumnos";
	$password = "2022";
	$dbname = "admin_default";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	return $conn;
}

?>
