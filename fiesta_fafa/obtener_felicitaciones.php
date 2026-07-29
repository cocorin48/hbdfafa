<?php
include("conexion.php");
$sql = "SELECT * FROM felicitaciones
        ORDER BY fecha DESC";
$resultado = $conn->query($sql);
$datos = [];
while($fila = $resultado->fetch_assoc()){
    $datos[] = $fila;
}
echo json_encode($datos);
?>