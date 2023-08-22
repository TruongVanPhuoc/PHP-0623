<?php
class stack{
    public array $arr;
    public $limit;
    function __construct($limit){
        $this->arr= [];
        $this->limit = $limit;

    }
    function push($item){
        if(count($this->arr) < $this->limit){
            array_push($this->arr,$item);
        }
        else{
            die("Full stack");
        }
    }
    function pop(){

        if(!empty($this->arr)){
            array_shift($this->arr);}
        else{
            die("Stack is empty");
        }   }
    function top(){
       return current($this->arr);
}
    function get(){
        return $this->arr; 
    }

    
}





/* $arr = new stack(6);

$arr->push(3);
$arr->push(2);
$arr->push(1);
$arr->push(0);
print_r($arr->get()); 
$arr->pop();
echo "<br>";
print_r($arr->get()); 
echo "<br>";
echo $arr->top();
echo "<br>";
print_r($arr->get());  */




