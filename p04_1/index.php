<!DOCTYPE html>
<html>
	<head lang="sp">
		<title>Curso de PHP con MySQL</title>
	</head>
	<?php
		if(isset($_POST['nombre']))
	    	$nombre = $NOMBRE = $_POST['nombre'];

	 	if (!empty($nombre))
		{
			$link = new mysqli("localhost", "root", "amocte123", "tecnologiasweb_p04");	


			/* comprobar la conexi�n */
			if ($link->connect_errno) 
			{
			    echo "Fall� la conexi�n ".$link->connect_error."<br/>";
			    exit();
			}

			/* Crear una tabla que no devuelve un conjunto de resultados */
			if ( $result2 = $link->query("SELECT * FROM datoscliente WHERE nombre = '$nombre'") ) 
			{
				//echo "Se accedi� con �xtio la tabla datos_clientes <br/>");
				$row = $result2->fetch_array(MYSQLI_ASSOC);
				$result2->free();
			}

			$link->close();
		}
	?>	

	<style>
		.1#td { width:125.9pt;border:none;background:#000000;
		  mso-background-themecolor:accent5;mso-background-themetint:63;padding:0cm 5.4pt 0cm 5.4pt}

		body {
		    background-color: #EAEAEA;
		}

		* {
		 padding: 0cm 6pt;
		 font-family: "Century Gothic","sans-serif";
		 font-size: 13.0pt;
		 color: #000000;
		 font-weight: bold;
		}

		select, input {
		 padding: 0px;
		 width: 300px;
		}

		tr.even td {
		 background: #EAEAEA;
		}

		tr.last td {
		 border-bottom: solid #4BACC6 1.0pt;
		}

		tr.first td {
		 border-top: solid #4BACC6 1.0pt;
		 border-bottom: solid #4BACC6 1.0pt;
		}

		input[type=submit] {
			background: url('button_search.png') no-repeat;
			width: 176px;
			height: 40px;
			padding-top: 2px;
			border: none;
		}

		textarea {
		 font-family: "Arial","sans-serif";
		 font-size: 7.0pt;
		 color: #FFFFFF;
		 background: #000000;
		 font-weight: normal;
		}

	</style>
	<body>
		<h3 align="center">CODIGO DE PRUEBA - Datos Clientes</h3>

		<br/>

		<form method="post" action="index.php">
			<label>R.F.C</label><input type="text" name="nombre">
			<button type="submit">B U S C A R</button>
		</form>
		<button><a href= 'index2.php'>crear dir<a></button>
		<button><a href= 'index3.php'>crear mail<a></button>


		<?php if( isset($row) ) : ?>
			<!--form action="index.php" method="post"-->
			<table cellpadding=0 cellspacing=0 width="1200">
				<tr class="even">
		                <td>Nombre</td>
		                <td><?= $row['nombre'] ?></td> 
		        </tr>
				<tr class="even">
		                <td>Apellidos</td>
		                <td><?= $row['apellidos'] ?></td> 
		        </tr>
				<tr class="even">
		                <td>Direcci�n</td>
		                <td><?= $row['direccion'] ?></td> 
		        </tr>
				<tr class="even">
						<td>Ciudad</td>
						<td><?= $row['ciudad'] ?></td>
				</tr>
				<tr class="even">
		                <td>C�digo Postal</td>
		                <td><?= $row['codigo_postal'] ?></td> 
		        </tr>
			</table>
			<!--/form-->	

		<?php elseif(!empty($nombre)) : ?>

			 <h2>El USUARIO no existe</h2>
		<?php endif; ?>
	</body>
</html>