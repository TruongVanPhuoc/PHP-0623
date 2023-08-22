<?php
class Rectangle
{
    public int $with;
    public int $height;
    function __construct($with, $height)
    {
        $this->with = $with;
        $this->height = $height;
    }
    function area()
    {
        return $this->with * $this->height;
    }
    function perimeter()
    {
        return 2 * ($this->with + $this->height);
    }
    function display(): string
    {
        return "Rectangle{" . "width=" . $this->with . ", height=" . $this->height . "}";
    }
}
$rectangle = new Rectangle(10, 20);
echo $rectangle->display();
echo $rectangle->perimeter();
echo $rectangle->area();
?>