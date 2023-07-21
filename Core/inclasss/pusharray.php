<?php
  $arr1 = [1, 2, 3, 6,7,5,9];
  $arr2 =[5 ,6,7,8];
  $arr3 = [9,10,11,12];
  function mergeArr2(...$arr){
    $arrnew=[];
    foreach($arr as $value){
        array_push($arrnew,...$value);
    }
    return $arrnew;
  }
 function mergeArr(...$arr){
    $arrnew=[];
    for($i=0;$i< count($arr);$i++){
        array_push($arrnew,...$arr[$i]);
    }
    return $arrnew;
 }
 function dlArr($arr,$loca){
    
    for($i=$loca;$i< count($arr)-1;$i++){
        $a=1;
        if($i==$loca){
            $arr[$i]=$arr[$i+$a];
           
        }
        $a++;
        return $arr;
 }
}
 

 /*  $arr0 = mergeArr($arr1,$arr2);
  print_r(mergeArr($arr1,$arr2,$arr3));
  echo "<br>";
  print_r(mergeArr2($arr1,$arr2,$arr3)); */
  print_r(dlArr($arr1,3));
  max()
?>