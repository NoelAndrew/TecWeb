<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php 
$variable1=" PHP 5";
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />    
</head>
<body>
    <?php
        include("conectar.php");
        //$id= $_POST['Id_cliente'];
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellidos'];
        $direccion= $_POST['direccion'];
        $ciudad= $_POST['ciudad'];
        $cp= $_POST['codigo_postal'];

        $query= "INSERT INTO datoscliente (nombre,apellidos,direccion,ciudad,codigo_postal) VALUES('$nombre','$apellido','$direccion','$ciudad','$cp')";
        $resultado= $conexion->query($query);
        if($resultado){
            echo "Exito";
            include_once 'ver.php';
        }else{
            echo "fracaso";
        }

        function buscaRepetido($nom,$ape,$conexion){
            $sql= "SELECT * from datoscliente
                where nombre='$nom' and apellidos='$ape'";
        }
    ?>

</body> 
</html>