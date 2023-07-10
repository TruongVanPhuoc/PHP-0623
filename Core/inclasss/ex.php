<?php
//b1. viết hàm in ra số lẻ từ 0-100
function printOdd(){
    for($i=0;$i<=100;$i++){
     if ($i%2!=0){
        echo "$i <br>";
     }
    }
  

}
printOdd();

?>