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
            //echo "Bienvenido a Domingoooo!";
            include_once 'respuesta_registro.php';
        }else{
            echo "fracaso";
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

}  
    $cones= new ConexionPHP ();
    $id = $_POST['idc'];
   $cones->eliminar($id);
  
?>