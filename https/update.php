<?php
$conn = new mysqli("localhost", "root", "", "dbtest");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$nacionalidad = $_POST["nacionalidad"];

$sql = "UPDATE idol 
SET nombre='$nombre', apellido='$apellido', edad=$edad, nacionalidad='$nacionalidad'
WHERE id=$id";

$conn->query($sql);

echo "ok";
?>