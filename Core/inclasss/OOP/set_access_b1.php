<?php

class House
{
    // color of the house
    private string $color;
    // only these colors are allowed
    private array $allowedColors = [
        'black', 'blue', 'red', 'green'
    ];

    public function setColor($color)
    {
        // Black to black (lowercase)
        $color = strtolower($color);
        if (in_array($color, $this->allowedColors)) {
            // if $color is in the $allowedColors array
            // we can set the color property
            $this->color = $color;
        }
    }

    public function getColor(): string
    {
        if ($this->color) {
            // if color is set
            return $this->color;
        } else {
            // show an error message
            return 'not allowed';
        }
    }
}

// Example 1
$house1 = new House();
$house1->setColor('black');
echo $house1->getColor();
echo '<br>';
$house2 = new House();
$house2->setColor('yellow');
echo $house2->getColor();
