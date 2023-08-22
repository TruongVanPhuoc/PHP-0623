<?php

namespace model;

class Product
{
    private int $id;
    private string $name;
    private float $price;

    function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    function setid($id)
    {
        $this->id = $id;
    }
    function getid()
    {
        return $this->id;
    }

    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
    function setPrice($price)
    {
        $this->price = $price;
    }
    function getPrice()
    {
        return $this->price;
    }
}
