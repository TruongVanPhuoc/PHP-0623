<?php

include '../model/Product.php';
include '../productmanager/ProductManager.php';

use model\Product;
use productmanager\ProductManager;


$productManager = new ProductManager();
if (file_exists('products.json')) {
    $productData = json_decode(file_get_contents('products.json'), true);
    foreach ($productData as $productData) {
        $product = new Product($productData['id'], $productData['name'], $productData['price']);
        $productManager->setProducts($product);
    }
}

function handleID($productManager){
    $maxid = 0;
    foreach ($productManager->getProduct() as $product) {
        $id = $product->getid();    
        if ($id > $maxid) {
                $maxid = $id;
            }
        }
        return $maxid + 1;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) && isset($_POST['price'])) {
       
        $name = $_POST['name'];
        $price = $_POST['price'];
        $id = handleID($productManager);
        $product = new Product($id, $name, $price);
        $productManager->setProducts($product);
        $productsData = array();
        foreach ($productManager->getProduct() as $product) {
            $productsData[] = array(
                'id' => $product->getid(),
                'name' => $product->getName(),
                'price' => $product->getPrice()
            );
        }
        file_put_contents('products.json', json_encode($productsData));
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 300px;
            margin: 0 auto;
        }

        form div {
            margin-bottom: 10px;
        }

        form label {
            display: block;
            font-weight: bold;
        }

        form input[type="text"] {
            width: 100%;
            padding: 5px;
        }

        form button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
   
    </style>

</head>

<body>
    <form action="" method="post">
        
      <!--   <div>
            <label for="">ID</label>
            <input type="text" name="id">
        </div> -->
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" name="price">
        </div>
        <div>
            <button type="submit" name="submit">ADD</button>
        </div>
    </form>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>

        </tr>
        <tr>
            <?php foreach ($productManager->getProduct() as $product) : ?>
        <tr>
            <td><?= $product->getid(); ?></td>
            <td><?= $product->getName(); ?></td>
            <td><?= $product->getPrice(); ?></td>
        </tr>
    <?php endforeach; ?>
    </tr>
    </table>
</body>

</html>