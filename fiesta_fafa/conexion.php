<?php
$host = "sql102.infinityfree.com";
$usuario = "if0_42525418";
$password = "Packof7_XG";
$bd = "fiesta_fafa";
$conn = new mysqli($host, $usuario, $password, $bd);
if($conn->connect_error){
    die("Error de conexión: " . $conn->connect_error);
}
$conn->set_charset("utf8");
?>
