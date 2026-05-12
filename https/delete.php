<?php
$conn = new mysqli("localhost", "root", "", "dbtest");

$id = $_POST["id"];

$sql = "DELETE FROM idol WHERE id=$id";

$conn->query($sql);

echo "ok";
?>