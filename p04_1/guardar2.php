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
        $mail= $_POST['email'];
        $contraseña= $_POST['contra'];
        

        $query= "INSERT INTO acceso_cliente (email,contra) VALUES('$mail','$contraseña')";
        $resultado= $conexion->query($query);
        if($resultado){
            echo "Exito";
            include_once 'ver.php';
        }else{
            echo "fracaso";
        }

        function buscaRepetido($mail,$contra,$conexion){
            $sql= "SELECT * from acceso_cliente
                where email='$mail' and contra='$contraseña'";
        }
    ?>

</body> 
</html>