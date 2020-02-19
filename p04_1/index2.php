<!DOCTYPE html>
<html>
	<head lang="sp">
        <title>Formulario</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="tabla.css">

        <script type="text/javascript">
            function comprobarDatosFormulario(){
                var comprobacion = false;
                var expReg = /[\s\S]{3}/;        
                var id = document.getElementById('Idid').value;
                var nombre= document.getElementById('nombreid').value;
                var apellido= document.getElementById('apellidoid').value;
                var dir= document.getElementById('direccionid').value;
                var ciudad= document.getElementById('ciudadid').value;
                var cp= document.getElementById('cpid').value;

                /*if(!expReg.test(id) ){
                    alert(' falta id');
                    return false;
                }*/
                if(!expReg.test(nombre)){
                    alert('Ingrese su nombre');
                    return false;
                }
                if(!expReg.test(apellido)){
                    alert(' Ingrese su apellido');
                    return false;
                }
                if(!expReg.test(dir)){
                    alert('Ingrese su direccion');
                    return false;
                }
                if(!expReg.test(ciudad)){
                    alert('Ingrese su numero de ciudad');
                    return false;
                }
                if(!expReg.test(cp)){
                    alert('Ingrese su codigo postal');
                    return false;
                }
           
                else{
                
                }
            }
        </script>
	</head>
	<body>
		<center>
            <h1>Formulario</h1>
            <form name ="formularioCliente" action= "guardar.php" method="POST" 
		        onsubmit="return comprobarDatosFormulario()"> 
                <!--<p>Id: <input id="Idid" type="number" name="Id_cliente"></p><br>-->
                <p>Nombre: <input id="nombreid" type="text" name="nombre"></p><br>
                <p>Apellidos: <input id="apellidoid" type="text" name="apellidos" ></p><br>
                <p>Direccion: <input id="direccionid" type="text" name="direccion" ></p><br>
                <p>Ciudad: <input id="ciudadid" type="text" name="ciudad" ></p><br>
                <p>Codigo Postal: <input id="cpid" type="number" name="codigo_postal" ></p><br>
                <p><input type="submit"  value = "Guardar"></p>
            </form>
            
            <!--<br><a href="../../../vistas/opc/domingo/ver.php"> <input type="submit"  value = "Cancelar"></a>-->
          </center>
	</body>
</html>