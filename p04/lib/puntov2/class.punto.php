<?php
namespace WEBTEC\API\V2;
class Punto{
    private $x;
    private $y;

    public function __construct($x=0, $y=0){
        $this->x = $x;
        $this->y = $y;
    }
    public function setX($coorx){
        $this->x = $coorx;

    }
    public function setY($coory){
        $this->y = $coory;
    }
    public function getX(){
        return $this->x;
    }
    public function getY(){
        return $this->y;
    }
    public function verPunto(){
        echo 'x = '.$this->x;
        echo '<br>';
        echo'y = '.$this->y;
    }
    public static function pendiente($p1, $p2){
        return 
           $p2->getY()-$p1->getY()/ +
           $p2->getX()-$p1->getX();
    }
}
?>