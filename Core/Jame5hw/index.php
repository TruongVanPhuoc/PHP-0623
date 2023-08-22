<?php
interface  Resizeabl{
    function resize($percent);
}

abstract class shapes{
    private $color;
    protected $filled;
    function __construct($color,$filled){
        $this->color=$color;
        $this->filled=$filled;
    }
    abstract function getArea();
    abstract function getPerimeter();
    function setColor($color){
        $this->color=$color;
    }
    function getColor(){
        return $this->color;
    }
    function setFilled($filled){
        $this->filled=$filled;
    }
    function getFilled(){
        return $this->filled;
    }
    function tostring(){
        return "Color:".$this->getColor()." "."Filled".$this->getFilled()." "."Area".$this->getArea()." "."Perimeter".$this->getPerimeter();
    }
}

class Retangle extends shapes implements Resizeabl {
    private $width;
    private $height;
    
    function __construct($color,$filled,$width,$height){
        parent::__construct($color,$filled);
        $this->width=$width;
        $this->height=$height;
    }
    function setWidth($width){
        $this->width=$width;
    }
    function getWidth(){
            return $this->width;
    }
    function setHeight($height){
            $this->height=$height;
    }
    function getHeight(){
            return $this->height;
 
    }
    function getArea(){
            return $this->width*$this->height;
    }
    function getPerimeter(){
        return 2*$this->width + 2*$this->height;
    }
    function resize($percent){
            $this->width=$this->width*$percent/100;
            $this->height=$this->height*$percent/100;
        }
   
}



class circle extends shapes {
    private $radius;
    function __construct($color,$filled,$radius)
    {
        parent::__construct($color,$filled.$radius);
        $this->radius=$radius;
        
    }
    function setRadius($radius){
            $this->radius=$radius;
        }
    function getRadius(){
        return $this->radius;
}   
    function getArea(){
        return 3.14*$this->radius*$this->radius;
    }
    function getPerimeter(){
        return 2*$this->radius*3.14;
    }
    function resize($percent){
        $this->radius = $this->radius*$percent/100;
    }
}

$r1 = new Retangle("vang",true,2,3);
$r2 = new circle("Nau",true,3);
echo $r2 -> getRadius()."<br>";
$r2 -> resize(15);
echo $r2->getRadius();