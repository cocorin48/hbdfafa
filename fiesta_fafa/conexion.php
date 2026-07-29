<?php
$host = "sql102.infinityfree.com";
$usuario = "if0_42525418";
$password = "Packof7_XG";
$bd = "if0_42525418_nom";
$conn = new mysqli($host, $usuario, $password, $bd);
if($conn->connect_er
   ror){
    die("Error de conexión: " . $conn->connect_error);
}
$conn->set_charset("utf8");
?>
