<?php
$conn = new mysqli("localhost", "root", "", "dbtest");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$nacionalidad = $_POST["nacionalidad"];

$sql = "INSERT INTO idol (nombre, apellido, edad, nacionalidad)
VALUES ('$nombre', '$apellido', $edad, '$nacionalidad')";

$conn->query($sql);

echo "ok";
?>

<button>
    <a href="/micaca/https/read.php">Ver datos</a>
</button>