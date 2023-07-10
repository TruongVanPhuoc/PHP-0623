<?php

/**$name = "Truong Van Phuoc";
    
    var_dump($name);
    var_dump($price);
    echo "Thi sinh $name";
    echo "Thi sinh" . $name. "PP";
    $price = 10.5;
    $price2 = 12.5;
    echo $price + $price2; **/
//Bieen cuc bo
function mytest()
{
    $x = 5;
    echo "Bien cuc bo  la :$x";
}
//Bieen toan cuc - muon su dung bien ben ngoai goi mang global
/*$y=90;
    function mytest2(){
        echo "Gia tri la".$GLOBALS['y'];
    }
    mytest();
    mytest2();
 */
function mytest3()
{
    static $x = 1;
    echo $x;
    $x++;
}
mytest3();
mytest3();
mytest3();
