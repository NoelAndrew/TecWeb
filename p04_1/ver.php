<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php 
$variable1=" PHP 5";
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="table.css">

</head>
<body>

	<center>
		<h1>Bienvenido a Domingo</h1>
		<table >
			<thead>
					<!--<th><a href="index.php">Nuevo</a></th>-->
				<tbody>
					<thead>
						<tr>
							<td>ID</td>
							<td>NOMBRE</td>
							<td>APELLIDO</td>
							<td>DIRECCION</td>
							<td>CIUDAD</td>
							<td>CODIGO POSTAL</td>
						</tr>
					</thead>
					<?php
						include("conectar.php");
						$query="SELECT * FROM datoscliente";
						$resultado= $conexion->query($query);
						while ($row=$resultado->fetch_assoc()) {
					?>
						<tr>
							<td><?php echo $row['Id_cliente']; ?></td>
							<td><?php echo $row['nombre']; ?></td>
							<td><?php echo $row['apellidos']; ?></td>
							<td><?php echo $row['direccion']; ?></td>
							<td><?php echo $row['ciudad']; ?></td>
							<td><?php echo $row['codigo_postal']; ?></td>
							<!--<td>
								<a href="../../../vistas/opc/domingo/modificar.php?iddom=<?php echo $row['iddom'];?>">
    							<img class="editar" src="../../../vistas/imagen/edit.jpg" alt="Editar" title="Editar" width="35" height="35"></a> 
							</td>
							<td>
								<a href="../../../vistas/opc/domingo/eliminar.php?iddom=<?php echo $row['iddom'];?>">
    							<img class="editar" src="../../../vistas/imagen/elim.jpg" alt="Eliminar" title="Eliminar" width="35" height="35"></a> 
							</td>-->
						</tr>

					<?php

						}
					?>
				</tbody>
			</thead>
		</table>

		<br><br><a href="index2.php">
		<input type="submit" value="REFRESAR"></a>
	</center>
</body>
</html>