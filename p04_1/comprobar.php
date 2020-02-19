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
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellidos'];

		$query="SELECT * FROM datoscliente";
		$resultado= $conexion->query($query);
		while ($row=$resultado->fetch_assoc()) {
        $row['nombre']; 
        $row2['apellidos']; 

        if( ($nombre == $row) && ($apellido == $row2)){
            echo "El cliente ya existe";
        }
        else{

        }
    ?>

</body> 
</html>