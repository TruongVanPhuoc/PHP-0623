<?php
// Bai 1 in ra cac so le tu 100 ve 0

function printOdd(int $number):void
{
    echo "Cac co tu $number ve 0: ";
    for ($i = $number; $i >= 0; $i--) {
        if ($i % 2 == 1) {
            echo "$i -- ";
        }
    }
    echo "<br>";
}
printOdd(100);

//Bai 2 in ra 5 so chan dau tien 100 ve 0
function printEven()
{
    $count = 0;
    echo "5 so chan dau tien:";
    for ($i = 100; $i >= 0; $i--) {
        if ($i % 2 == 0) {
            echo "$i -- ";
            $count++;
            if ($count == 5) {
                break;
            }
        }
    }
    echo "<br>";
}
function whileprinteven()
{
    $count = 0;
    $i = 0;
    echo "5 so chan dau tien:";
    while ($count <= 5) {
        if ($i % 2 == 0) {
            echo "$i -- ";
            $count++;
        }
        $i++;
    }
    echo "<br>";
}

whileprinteven();
printEven();

//Tinh tong cac so chi het cho 7 0 - 100
function sumDivisible(int $number,int $max, int $min):int
{
    $sum = 0;
    echo "Tổng các sô chia hết cho $number:  ";
    for ($i = $min; $i <= $max; $i++) {
        if ($i % $number == 0) {
            $sum += $i;
        }
    }
    
    return $sum;
}
echo sumDivisible(7,100,0) ."<br>" ;
// Check một số phải số nguyên tố không
function checkPrimes($number)
{
    $flag = true;
    if ( $number == 1){$flag = false;}
    for ($i = 2; $i < $number - 1; $i++) {
        if ($number % $i == 0) {
            $flag = false;
            break;
        }
    }
    if ($flag == true) {
        echo "$number là số nguyên tố";
    } else {
        echo "$number khong phai la số nguyên tố";
    }
}

checkPrimes(1);
