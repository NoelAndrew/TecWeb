<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
    <head>
        <title>Practica 2</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>


        <?php 
                    echo "<h2> Ejercicio1 </h2>";

            echo "<p>
                _myvar:  es valido  <br>
                _7var:  es valido <br> 
                myvar:  no es valida <br> 
                myvar:  es valido <br> 
                var7:  es valido <br> 
                _element1:  es valido <br>
                house*5:  no es valido 
                </p>";

            echo "<h2> Ejercicio2 </h2>";
        $a= 'ManejadorSQL';
        $b= 'MySQL';
        $c=&$a;
            echo "<p> 
                a= $a <br> 
                b= $b <br>
                c= $c     
             </p>";
        $a = "PHP server";
        $b=&$a;
        echo "<h3> Asignacion </h3>";
        echo "<p> 
                a= $a <br>
                b =$b <br>     
                c= $c   
              </p>";
              echo "<h2>Ejercicio 3</h2>";
                $a = "PHP5";
                echo "a: ". $a . "<br>";    
                $z[] = &$a;
                print_r($z);
                echo "<br>";
                $b = "Quinta version de PHP";
                echo "b: ". $b . "<br>";    
                
                @$c = $b*10;
                echo "c: ". $c . "<br>";    
                
                $a .= $b;
                echo "a: ". $a . "<br>";    
                
                $b *= $c;
                echo "b: ". $b . "<br>";    
                
                $z[0] = "MySQL";
                echo "z[0]: ". $z[0] . "<br>";    

              echo "<h2>Ejercicio 4</h2>";
              $GLOBALS["a"]; 
              $GLOBALS["b"];
              $GLOBALS["c"];
              $GLOBALS["z"];

              echo"$a <br>";
              echo"$b <br>";
              echo"$c <br>";
              echo"MySQL <br>";
              

                ///------------------
                echo "<h2>Ejercicio 5</h2>";
                $a="7 personas";
                $b= (integer)$a;
                echo $a;
                echo "<br>";
                echo $b;
                echo "<br>";
                unset($a);
                $a="9E3";
                $c=(double) $a;
                echo $a;
                echo "<br>";
                echo $c;

                unset($a);
                unset($c);
                unset($b);
                echo "<h2>Ejercicio 6</h2>";

                $a= true;
                $b= false;
                $c= true;
                $d= false;
                $e= true;
                $f= false;
                var_dump($a);echo "<br>";
                var_dump($b);echo "<br>";
                var_dump($c);echo "<br>";
                var_dump($d);echo "<br>";
                var_dump($e);echo "<br>";
                var_dump($f);

                unset($a);
                unset($b);
                unset($c);
                unset($d);
                unset($e);
                unset($f);


                $a="0";
                $b="TRUE";
                $c=FALSE;
                $d=($a OR $b);
                $e=($a AND $c);
                $f=($a XOR $b);

                echo $a;echo "<br>";
                echo $b;echo "<br>";
                var_dump($c);echo "<br>";
                echo $d;echo "<br>";
                var_dump($e);echo "<br>";
                echo $f;echo "<br>";
                echo "<br>";

                $nuevo = (string) $c;
                echo $c;
                echo "<h2>Ejercicio 7</h2>";
                echo $_SERVER['SERVER_SOFTWARE'];
                echo "<br>";
                echo $_SERVER['HTTP_USER_AGENT'];
                echo "<br>";
                echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
                echo "<br>";
        ?>

    </body>
</html>