<?php

class Fruits
{
    private $color;
    private $listcolor = ['red', 'green', 'blue', 'white', 'black'];
    
    
    
    function setColor($color)
    {
        if (in_array($color, $this->listcolor)) {
            $this->color = $color;
        }
    }
    function getColor()
    {
        if ($this->color) {
            
            return $this->color;
        }
        else {
            return "Invalid";
        }
    }
}

$colors = new Fruits();
$colors->setColor("yellow");
echo $colors->getColor();


?>