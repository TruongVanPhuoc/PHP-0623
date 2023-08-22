<?php
namespace ProductManager;

class ProductManager
{
    private array $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function setProducts($product)
    {
        $found = false;

        foreach ($this->products as $existingProduct) {
            if ($existingProduct->getName() === $product->getName()) {
                $found = true;
            
                break;
            }
        }
        if (!$found) {
            $this->products[] = $product;
        }
    }

    public function getProduct()
    {
        return $this->products;
    }
}