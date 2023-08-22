<?php
class stopWatch
{
    private int $startTime;
    private int $endTime;

    function startTime(): void
    {
        $this->startTime = time();
    }
    function Stop(): void
    {
        $this->endTime = time();
    }
    function getElapsedTime()
    {
        $elapTime = $this->endTime - $this->startTime;
        return $elapTime;
    }
}
function generateRandomArray($n)
{
    $randomArray = array();

    for ($i = 0; $i < $n; $i++) {
        // Thêm số ngẫu nhiên vào mảng
        $randomNumber = rand(1, 100); // Tạo số ngẫu nhiên trong khoảng từ 1 đến 100 (có thể thay đổi khoảng tùy ý)
        $randomArray[] = $randomNumber;
    }

    return $randomArray;
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

$stopwatch = new Stopwatch();
$stopwatch->startTime();
$arr = generateRandomArray(10600);
insertionSort($arr);
$stopwatch->Stop();
echo $stopwatch -> getElapsedTime();
