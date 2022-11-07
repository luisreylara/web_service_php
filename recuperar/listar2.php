<?php
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

$sql = "SELECT codigo,descripcion,precio FROM articulos";
$result = $conn->query($sql);

$miresult=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($miresult);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["codigo"]. " - Name: " . $row["descripcion"]. " " . $row["precio"]. "<br>";
//     echo json_encode($row);
//   }
// } else {
//   echo "0 results";
// }

$conn->close();
?>