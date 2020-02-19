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
 class ConexionPHP{
  
    var $cone;

    public function __construct(){

        $this->cone = new mysqli("localhost","root","AE1623","p05");
        $this->cone->set_charset("utf8");

    }
    public function guardar($nombre,$email,$telefono,$historia,$color,$talla){
        $query= "INSERT INTO cliente (Nombre, Email, Telefono, Historia, Color, Talla) VALUES('$nombre','$email', '$telefono', '$historia', '$color', '$talla')";
        $resultado= $this->cone->query($query);
        if($resultado){
            return true;
        }else{
            return false;
        }

    }
    public function buscar($email){

        $query= "SELECT * from cliente where Email='$email'";
        $resultado= $this->cone->query($query);
        if($resultado){
            echo '<table>'; 
        while($fila=$resultado->fetch_assoc()) 
        { 
            
            echo '<tr>';
            echo '<td> ID </td>' ; 
            echo '<td> NOMBRE </td>' ; 
            echo '<td> EMAIL </td>' ; 
            echo '<td> TELEFONO </td>' ; 
            echo '<td> HISTORIA </td>' ; 
            echo '<td> COLOR </td>' ; 
            echo '<td> TALLA </td>' ; 
            echo '<td> FECHA DE REGISTRO </td>' ; 
            echo '<td> ELIMINADO </td>' ; 
            echo '</tr>'; 

            echo '<tr>'; 
            echo '<td>' . $fila['idCliente'] . '</td> 
           <td>' . $fila['Nombre'] . '</td> 
            <td>' . $fila['Email'] . '</td>
            <td>' . $fila['Telefono'] .'</td> 
            <td>' . $fila['Historia'] .'</td> 
            <td>' . $fila['Color'] . '</td>
            <td>'. $fila['Talla'] .'</td>
            <td>'. $fila['fecha_registro'] .'</td>
            <td>'. $fila['eliminado'] . '</td> '; 
            echo '</tr>'; 
        } 
        echo '</table>';
        }else{
            echo "fracaso";
        }
                   
    } 
    public function eliminar($id){

        $q = "UPDATE cliente SET  eliminado='1' WHERE idCliente=$id";
        $rs = $this->cone->query($q);
        if($rs == false) {
            echo '<p>Error al modificar los campos en la tabla.</p>';
        }else{
            echo '<p>Los datos se han modificado correctamente.</p>';
        }

    }
    public function verificar($email){
        $query= "SELECT eliminado, Email from cliente where Email='$email'";
        $resultado= $this->cone->query($query);
         $re=$resultado->fetch_assoc();
         if($re == false) {
            return false;
        }else{
            if($re['Email'] && $re['eliminado']==0)
            {
                return true;
            }
            else{
                return false;
            }
        }
        

    }

}  
class respuesta{

    public function __construct(){
            echo "<h1>MUCHAS GRACIAS</h1>";
    
            echo "<p>Gracias por entrar al concurso de Tenis Forcefield&#169;. Hemos recibido la siguiente información de tu registro:</p>";
    }
    public function cuerpo($nombre, $email,$telefono,$historia){
        echo "<h2>Acerca de ti:</h2>";
            echo "<ul>";
                echo "<li><strong>Nombre:</strong> <em> $nombre </em></li>";
                echo "<li><strong>E-mail:</strong> <em>$email</em></li>";
                echo "<li><strong>Télefono:</strong> <em>$telefono</em></li>";
            echo "</ul>";
            echo "<p><strong>Tu triste historia:</strong> <em>$historia</em></p>";
    
    }
    public function pie($color,$talla){
        
        echo "<h2>Tu diseño de Tenis (si ganas): </h2>";
        echo "<li><strong>Color:</strong> <em> $color </em></li>";
        echo "<li><strong>Talla:</strong> <em>$talla</em></li>";
        
        }
    }
    class Informacion{
        var $email;
        var $nombre;
        var $telefono;
        var $historia;

        public function __construct(){
                $this->email = "vacio@gmail";
                $this->nombre = "edgar";
                $this->telefono = "2481045302";
                $this->historia = "soy pobre";
        }
        public function set_datos($nombre, $email,$telefono,$historia){
                 $this->email =$nombre;
                $this->nombre = $email;
                $this->telefono = $telefono;
                $this->historia = $historia;
        
        }
        public function get_datos(){
            
            $arreglo = array($this->email, $this->nombre, $this->telefono, $this->historia);
            return $arreglo;
            
            }
        }
        class disegno{
            var $color;
            var $talla;
    
            public function __construct(){
                    $this->color = "negro";
                    $this->talla = "8";
            }
            public function set_datos($color, $talla){
                     $this->color =$color;
                    $this->talla = $talla;
            
            }
            public function get_datos(){
                
                $arreglo = array($this->color, $this->talla);
                return $arreglo;
                
                }
            }

            class respuesta2{

                public function __construct(){
                        echo "<h1>MUCHAS GRACIAS</h1>";
                
                        echo "<p>Gracias por entrar al concurso de Tenis Forcefield&#169;. Hemos recibido la siguiente información de tu registro:</p>";
                }
                public function cuerpo(Informacion $info){
                    $infos=  $info->get_datos();
                    $nombre = $infos[0];
                    $email = $infos[1];
                    $telefono = $infos[2];
                    $historia = $infos[3];
                    echo "<h2>Acerca de ti:</h2>";
                        echo "<ul>";
                            echo "<li><strong>Nombre:</strong> <em> $nombre </em></li>";
                            echo "<li><strong>E-mail:</strong> <em>$email</em></li>";
                            echo "<li><strong>Télefono:</strong> <em>$telefono</em></li>";
                        echo "</ul>";
                        echo "<p><strong>Tu triste historia:</strong> <em>$historia</em></p>";
                
                }
                public function pie(Disegno $info){
                    $infos=  $info->get_datos();
                    $color = $infos[0];
                    $talla = $infos[1];
                    echo "<h2>Tu diseño de Tenis (si ganas): </h2>";
                    echo "<li><strong>Color:</strong> <em> $color </em></li>";
                    echo "<li><strong>Talla:</strong> <em>$talla</em></li>";
                    
                    }
                }











    $cones= new ConexionPHP ();
    $nombre = $_POST['username'];
    $email = $_POST['emailaddress'];
    $telefono = $_POST['telephone'];
    $historia = $_POST['story'];
    $color = $_POST['color'];
    $talla = $_POST['size'];
    if(!$cones->verificar($email)){
       if(  $cones->guardar($nombre, $email,$telefono,  $historia, $color,$talla))
       {
        $resp = new respuesta2();
        $info= new Informacion;
        $dis= new Disegno();
        $info->set_datos($nombre, $email,$telefono,  $historia);
        $dis->set_datos($color,$talla);
        $resp->cuerpo( $info);
        $resp->pie($dis);
       }
       else{
        echo "<h2> ¡ERROR EN EL REGISTRO, INTENTA DE NUEVO! </h2>";
       }
    }
    else {
        echo "<h2> ¡Ya estas registrado >:C! </h2>";
    }
?>
    
    </body>
</html>