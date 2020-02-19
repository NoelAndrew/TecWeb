<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html;
charset=utf-8" />

<title>autos</title>
</head>

<body>
<?php 
 
$carro = array (
   "ABC1234"=> array (
      "Auto" => Array (
         "Marca" => "Toyota",
         "Modelo" => "2019",
         "Tipo" => "Camry"
      ),
      "Propietario" => Array (
         "Nombre" => "Mario",
         "Ciudad" => "Puebla",
         "Direccion"=> "Amalucan beach"
      )
      ),
   "ABC1235"=> array (
       "Auto" => Array (
          "Marca" => "Toyota",
          "Modelo" => "2018",
          "Tipo" => "automovil"
       ),
       "Propietario" => Array (
          "Nombre" => "Noel",
          "Ciudad" => "Atlixco",
          "Direccion"=> "Atlixco"
       )
       ),
    "ABC1236"=> array (
       "Auto" => Array (
          "Marca" => "Chevrolet",
          "Modelo" => "2012",
          "Tipo" =>"pickup"
       ),
       "Propietario" => Array (
          "Nombre" => "Jorge",
          "Ciudad" => "Chipilo",
          "Direccion"=> "Chipilandia"
       )
       ),
    "ABC1237"=> array (
       "Auto" => Array (
          "Marca" => "VW",
          "Modelo" => "2020",
          "Tipo" => "automovil"
       ),
       "Propietario" => Array (
          "Nombre" => "Poncho",
          "Ciudad" => "Pochutla",
          "Direccion"=> "Pochuyork"
       )
       ),
    "ABC1239"=> array (
       "Auto" => Array (
          "Marca" => "Audi",
          "Modelo" => "2020",
          "Tipo" => "automovil"
       ),
       "Propietario" => Array (
          "Nombre" => "Edgar",
          "Ciudad" => "San Martin",
          "Direccion"=> "Centro SanMa"
       )
       ),
    "ABC1240"=> array (
       "Auto" => Array (
          "Marca" => "VW",
          "Modelo" => "2017",
          "Tipo" => "Automovil"
       ),
       "Propietario" => Array (
          "Nombre" => "Christian",
          "Ciudad" => "Huejo",
          "Direccion"=> "Huejotzingo"
       )
       ),
    "ABC1241"=> array (
       "Auto" => Array (
          "Marca" => "Chevrolet",
          "Modelo" => "2019",
          "Tipo" => "Automovil"
       ),
       "Propietario" => Array (
          "Nombre" => "Andrew",
          "Ciudad" => "Puebla",
          "Direccion"=> "San Manuel"
       )
       ),
    
    "ABC1242"=> array (
       "Auto" => Array (
          "Marca" => "Ford",
          "Modelo" => "2008",
          "Tipo" => "Automovil"
       ),
       "Propietario" => Array (
          "Nombre" => "Neponcio",
          "Ciudad" => "Acapulco",
          "Direccion"=> "Acapulco"
       )
       ),
    
    "ABC1243"=> array (
       "Auto" => Array (
          "Marca" => "Kan kun",
          "Modelo" => "2015",
          "Tipo" => "Automovil"
       ),
       "Propietario" => Array (
          "Nombre" => "Miguel",
          "Ciudad" => "Atlanta",
          "Direccion"=> "Atlanta"
       )
       ),
    
    "ABC1244"=> array (
       "Auto" => Array (
          "Marca" => "Kia",
          "Modelo" => "2018",
          "Tipo" => "Automovil"
       ),
       "Propietario" => Array (
          "Nombre" => "Luis",
          "Ciudad" => "Chipilo",
          "Direccion"=> "83 oriente"
       )
       ),
    
    "ABC1245"=> array (
       "Auto" => Array (
          "Marca" => "Audi",
          "Modelo" => "2017",
          "Tipo" => "Automovil"
       ),
       "Propietario" => Array (
          "Nombre" => "Jesus",
          "Ciudad" => "Ciudad Capsula",
          "Direccion"=> "CC"
       )
       ),
    
    "ABC1246"=> array (
       "Auto" => Array (
          "Marca" => "BMW",
          "Modelo" => "2018",
          "Tipo" => "Automovil"
       ),
       "Propietario" => Array (
          "Nombre" => "Maria",
          "Ciudad" => "Tuxtla",
          "Direccion"=> "Camino real"
       )
       ),
    
    "ABC1247"=> array (
       "Auto" => Array (
          "Marca" => "Kia",
          "Modelo" => "2011",
          "Tipo" => "Camioneta"
       ),
       "Propietario" => Array (
          "Nombre" => "Fernanda",
          "Ciudad" => "Queretaro",
          "Direccion"=> "Guadalupe Victoria"
       )
       ),
    
    "ABC1248"=> array (
       "Auto" => Array (
          "Marca" => "Ford",
          "Modelo" => "2016",
          "Tipo" => "Camioneta"
       ),
       "Propietario" => Array (
          "Nombre" => "Patricia",
          "Ciudad" => "Cancun",
          "Direccion"=> "Andador Turistico"
       )
       )
       );
 

 
       if($_POST["gender"] == "Masculino" && ($_POST["age"]<=35 && $_POST["age"]>=18))  
       {
        echo '<p>Auto registrado!' . htmlspecialchars($_POST["name"]) . '!</p>'; 
       }
       mostrar($_POST["id"], $carro);



       

       function mostrar ($aux,$carro)
       {
         $html = '<table border>';
         foreach ($carro as $key => $arreglos)
         { 
            if($aux == $key)
            {
               $html .= '<tr>';
               $html .= '<td>'.$key.'</td>';
               $html .= '</tr>';
               foreach($arreglos as $key => $arreglos)
                  {
                     $html .= '<tr>';
                     $html .= '<td>'.$key.'</td>';
                     $html .= '</tr>';
                     foreach($arreglos as $key => $info)
                     {
                        $html .= '<th>'.$key.'</th>';
                        $html .= '<td>'.$info.'</td>';
                       
                     }
                   }
            }
         }
         $html .= '</table>';
         echo $html; 
       }

  

?>
    
</body>

</html>     