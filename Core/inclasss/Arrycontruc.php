<?php
class Arraylist{
    public array|string $array;
    function __construct($arr ="")
    {
        if (is_array($arr)){
            $this->array = $arr;
        }
        else{
                    $this->array = [];
                }   
    }
    function getArr(){
        
        return $this->array;
    }

    function getItem($index){
        if($index < $this->size())
        {
            return $this->array[$index];
        }
    }
    function addArr($obj){
        if ($this->checkNum($obj)){
            array_push($this->array,$obj);
        }
        else{
                    die("Error adding");
                }  
    }
    function checkNum($index):bool{
        return preg_match("/^[0-9]+$/",$index);
    }
    function size(){
        if (!empty($this->array)){
            return count($this->array);
    }
        
    }
    
    function remover($index){
        
        if($index > 0 && $index < count($this->array))
        for ($i=0; $i < $this->size();$i++){   
            if ($index == $i){
                $this->array[$i]= $this->array[$i+1];
                array_pop($this->array);
            }
            
    }
}
}
$arrNumber = new Arraylist();
$arrNumber->addArr("12") ;
$arrNumber->addArr("13") ;
$arrNumber->addArr("14") ;
$arrNumber->addArr("15") ;
$arrNumber->addArr("16") ;
$arrNumber->addArr("17") ;  
$arrNumber->addArr("18") ;


print_r($arrNumber->getArr());
echo count($arrNumber->getArr());
$arrNumber->remover(5);
echo"<br>";
print_r($arrNumber->getArr());
echo $arrNumber->size();
echo"<br>";
echo $arrNumber->getItem(5);


