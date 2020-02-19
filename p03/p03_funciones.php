<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html;
charset=utf-8" />

<title>FUNCIONES</title>

</head>

<body>
<?php 
        

function multiplo($num) {

     if($num%5 == 0 && $num%7 ==0)
     {
       echo "<p> el numero $num es multiplo de 5 y 7</p>";  
     }
     else if($num%5 == 0){
        echo "<p> el numero $num es multiplo de 5 pero no de 7</p>";
     }else if($num%7 == 0){
        echo "<p> el numero $num es multiplo de 7 pero no de 5</p>";
     }else {
      echo "<p> el numero $num  no es multiplo de 5 y 7</p>";
     }


}
function pip() {
   $cont =0;
   do{
      $numero1 = rand(0,999);
      $numero2 = rand(0,999);
      $numero3 = rand(0,999);
      $arreglo [0][0] = $numero1;
      $arreglo [0][1] = $numero2;
      $arreglo [0][2] = $numero3;
      echo "[ ";
      echo $arreglo[0][0];
      echo " | ";
      echo $arreglo[0][1];
      echo " | ";
      echo $arreglo[0][2];
      echo " ]  <br>";
      $cont++;
  }while($numero1%2==0 && $numero2%2==0 && $numero3%2==0 ||
          $numero1%2==1 && $numero2%2==1 && $numero3%2==1 ||
          $numero1%2==0 && $numero2%2==0 && $numero3%2==1 ||
          $numero1%2==0 && $numero2%2==1 && $numero3%2==0 ||
          $numero1%2==1 && $numero2%2==0 && $numero3%2==0 ||
          $numero1%2==1 && $numero2%2==1 && $numero3%2==0 ||
          $numero1%2==0 && $numero2%2==1 && $numero3%2==1);

         $num=$cont*3;
      echo "<p> $num  números obtenidos en $cont iteraciones</p>";  
}

function enteroale($num)
{
   $random=.5;
   while(!is_int ( $random ))
   {
      $random =mt_rand_float(1, 99, '00');
      echo "<p> $random </p>";
      if($random%$num==0 && is_int ( $random ) ){
      break;
      }
   }

}
function enteroale2($num)
{
   do{
      $random =mt_rand_float(1, 99, '00');
      echo "<p> $random </p>";
   }
   while(!is_int ( $random ) || ($random%$num!=0 && is_int ( $random )  ));
   

}
function mt_rand_float($min, $max, $countZero = '0') {
   
   $countZero = +('1'.$countZero);
   $min = floor($min*$countZero);
   $max = floor($max*$countZero);
   $rand = mt_rand($min, $max) / $countZero;
   return $rand;
}
function ascii(){
  
   for($i=97; $i<=122; $i++){
       $arreglo[$i]= chr($i); 
   }
   $html = '<table border>';
    foreach ($arreglo as $key => $valor) {
      $html .= '<tr>';
      $html .= '<td>'.$key.'</td> <td>'.$valor.'</td>';
      $html .= '</tr>';
    }
    $html .= '</table>';
    echo $html; 
} 
//Fin de declaración de funciones
   echo "<h3> multiplos </h3>";  
   multiplo($_GET["num"]);
   echo "<h3> MATRIZ </h3>";  
   pip();
   echo "<h3> Ciclo do while </h3>";  
   enteroale2($_GET["num"]); 
   echo "<h3> Codigo Ascii </h3>";  
   ascii();

?>
    
</body>

</html>     