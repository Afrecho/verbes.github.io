
<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$servername = "localhost";
$username = "id22290714_lefacteur";
$password = "sdofh@@iuYTi5564";
$dbname = "id22290714_pruebas";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die(json_encode(array("error" => "Connection failed: " . $conn->connect_error)));
}

// Query para seleccionar todos los datos de la tabla `verbes`
$sql = "SELECT * FROM verbes";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Convertir el resultado a un array asociativo y luego a JSON
  $rows = array();
  while($row = $result->fetch_assoc()) {
    $rows[] = $row;
  }
  echo json_encode($rows);
} else {
  echo json_encode(array("error" => "0 results"));
}
$conn->close();

?>
=======
<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$servername = "localhost";
$username = "id22290714_lefacteur";
$password = "sdofh@@iuYTi5564";
$dbname = "id22290714_pruebas";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die(json_encode(array("error" => "Connection failed: " . $conn->connect_error)));
}

// Query para seleccionar todos los datos de la tabla `verbes`
$sql = "SELECT * FROM verbes";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Convertir el resultado a un array asociativo y luego a JSON
  $rows = array();
  while($row = $result->fetch_assoc()) {
    $rows[] = $row;
  }
  echo json_encode($rows);
} else {
  echo json_encode(array("error" => "0 results"));
}
$conn->close();

?>
