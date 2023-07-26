<?php
function countOcc(array $arr, float $value)
{
    $count = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($value == $arr[$i]) {
            $count++;
        }
    }
    return $count;
}
$arr = [1,3,4,5,6,7,5,5,5];
echo countOcc($arr, 5)

?>