<?php
        $cone = new mysqli("localhost","root","amocte123","p05");
        $nombre = $_POST['username'];
        $email = $_POST['emailaddress'];
        $telefono = $_POST['telephone'];
        $historia = $_POST['story'];
        $color = $_POST['color'];
        $talla = $_POST['size'];
        $query= "INSERT INTO cliente (nombre, email, telefono, historia, color, talla) VALUES('$nombre','$email', '$telefono', '$historia', '$color', '$talla')";
        $resultado= $cone->query($query);
        if($resultado){
            echo "Exito";
            include_once 'respuesta_registro.php';
        }else{
            echo "fracaso";
        }
?>