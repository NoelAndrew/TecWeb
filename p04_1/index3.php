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
                var email = document.getElementById('mailid').value;
                var contraseña= document.getElementById('contraid').value;

                /*if(!expReg.test(id) ){
                    alert(' falta id');
                    return false;
                }*/
                if(!expReg.test(email)){
                    alert('Ingrese su email');
                    return false;
                }
                if(!expReg.test(contraseña)){
                    alert(' Ingrese su apellido');
                    return false;
                
           
                else{
                
                }
            }
        </script>
	</head>
    <body>
    
		<center>
            <h1>Formulario</h1>
            <form name ="formularioCliente" method="post" action="correo.php" 
		        onsubmit="return comprobarDatosFormulario()"> 
                <p>e-mail: <input id="email" type="email" name="email"></p><br>
                <p>Contraseña: <input id="contra" type="password" name="contraid" ></p><br>
                <p><input type="submit"  value = "Guardar"></p>
            </form>
            
            <!--<br><a href="../../../vistas/opc/domingo/ver.php"> <input type="submit"  value = "Cancelar"></a>-->
          </center>
	</body>
</html>