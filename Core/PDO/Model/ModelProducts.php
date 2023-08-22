<?php
namespace Model\Product;
class Product{
    private $id;
    private $name;
    private $description;
    private $price;
    function __construct(){

    }
    function getName(){
        return $this->name;
    }
    function getDescription(){
        return $this->description;
    }
    function getPrice(){
        return $this->price;
    }
    function getId(){
        return $this->id;
    }
    function setName($name){
        $this ->name = $name;
    }
    function setDescription($description){
        $this->description = $description;
    }
    function setPrice($price){
        $this->price = $price;
    }
    function setId($id){
        $this->id = $id;
    }
    
}