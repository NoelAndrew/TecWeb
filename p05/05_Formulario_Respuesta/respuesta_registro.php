<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Registro Completado</title>
		<style type="text/css">
			body {margin: 20px; 
			background-color: #C4DF9B;
			font-family: Verdana, Helvetica, sans-serif;
			font-size: 90%;}
			h1 {color: #005825;
			border-bottom: 1px solid #005825;}
			h2 {font-size: 1.2em;
			color: #4A0048;}
		</style>
	</head>
	<body>
    <?php
    
    $nombre = $_POST['username'];
    $email = $_POST['emailaddress'];
    $telefono = $_POST['telephone'];
    $historia = $_POST['story'];
    $color = $_POST['color'];
    $talla = $_POST['size'];

		echo "<h1>MUCHAS GRACIAS</h1>";

		//echo "<p>Gracias por entrar al concurso de Tenis Forcefield&#169; "Chidos mis Tenis". Hemos recibido la siguiente información de tu registro:</p>";

		echo "<h2>Acerca de ti:</h2>";
		echo "<ul>";
			echo "<li><strong>Nombre:</strong> <em> $nombre </em></li>";
			echo "<li><strong>E-mail:</strong> <em>$email</em></li>";
			echo "<li><strong>Télefono:</strong> <em>$telefono</em></li>";
		echo "</ul>";

		echo "<p><strong>Tu triste historia:</strong> <em>$historia</em></p>";

        echo "<h2>Tu diseño de Tenis (si ganas)</h2>";
        echo "<em> $color </em><br>";
        foreach ($_POST['features'] as $key => $cosas) {
            echo $cosas . "<br />";
        }
        echo "<li><strong>Talla:</strong> <em>$talla</em></li>";
   //     echo "<em>Lo sentimos, NO hemos recibido esta información.</em>";
        ?>
	</body>
</html>