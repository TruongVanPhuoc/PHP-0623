<?php
    function maxArr (array $arr):int{
        $max=$arr[0];  
        for($i=1; $i<count($arr);$i++ ){
            if( $max < $arr[$i]){
                $max=$arr[$i];
            }
        }
        return $max;
    }
    // $arr = [2,4,5,3,4,6,7,10,8,9,7,11];
    // echo maxArr($arr);
    
    function selectionSort($array)
    {
        for ($i = 0; $i < count($array) - 1; $i++) {
            $min = $i;
            for ($j = $i + 1; $j < count($array); $j++) {
                if ($array[$j] < $array[$min]) {
                    $min = $j;
                }
            }
            $array = swapPositions($array, $i, $min);
        }
        return $array;
    }

function swapPositions($data, $left, $right)
{
    $backupOldDataRightValue = $data[$right];
    $data[$right] = $data[$left];
    $data[$left] = $backupOldDataRightValue;
    return $data;
}
function insertionSort($myArray): array
{
    for ($i = 0; $i < count($myArray); $i++) {
        $val = $myArray[$i];
        $j = $i - 1;
    
        while ($j >= 0 && $myArray[$j] > $val) {
            $myArray[$j + 1] = $myArray[$j];
            $j--;
        }
        $myArray[$j + 1] = $val;
    }
    return $myArray;
}

// $myArray = [3, 0, 2, 5, -1, 4, 1];
// echo "Original Array :\n";
// echo implode(', ', $myArray);
// echo "<br>";
// echo "\nSorted Array :\n";
// echo implode(', ', selectionSort($myArray));
$array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ', $array);
echo "<br>";
echo "\nSorted Array :\n";
print_r(insertionSort($array));
?>