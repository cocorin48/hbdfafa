<?php

include("conexion.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nombre = $_POST["nombre"];
    $mensaje = $_POST["mensaje"];

    $foto = "";

    if(isset($_FILES["foto"])){

        $nombreFoto = time() . "_" . $_FILES["foto"]["name"];

        $ruta = "uploads/" . $nombreFoto;

        move_uploaded_file($_FILES["foto"]["tmp_name"], $ruta);

        $foto = $ruta;

    }

    $sql = "INSERT INTO felicitaciones(nombre,mensaje,foto)
            VALUES(?,?,?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sss",$nombre,$mensaje,$foto);

    if($stmt->execute()){

        echo "OK";

    }else{

        echo "ERROR";

    }

}

?>