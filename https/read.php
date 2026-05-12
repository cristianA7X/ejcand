<link rel="stylesheet" href="style.css">
<?php
$conn = new mysqli("localhost", "root", "", "dbtest");

$resultado = $conn->query("SELECT * FROM idol");

while ($fila = $resultado->fetch_assoc()) {
    echo " nombre completo = " . $fila["nombre"] . " " . $fila["apellido"] . " <br> Edad = " . $fila["edad"] ." <br> Nacionalidad =  " . $fila["nacionalidad"] ." <br> " ." <br> " ." <br> ";
}
?>

<button style= "background-color: pink;" style.button>
    <a href="http://localhost/micaca">Volver</a>

</button> 
