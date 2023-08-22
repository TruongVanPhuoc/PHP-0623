<?php
namespace Service\ProductService;
use Model\Product\Product;
use \PDO;
use \PDOException;
class ProductService{
    private $con;
    function __construct(){
    try{
        $this->con = new PDO('mysql:host=localhost;dbname=product',"root","12345678");
        $this->con-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
     }
    }
    function getProduct(){
        try{
            $sql = "SELECT * FROM products";
            $stm = $this ->con->query($sql);
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        }catch(PDOException $e){
            echo "Lỗi đọc sản phẩm" . $e->getMessage();
            return[];}
    }
    function saveProduct($products){
        try{
            $spl = "INSERT INTO products(`name`, `description`, `price`) VALUES (:pName, :pDescription, :pPrice)";
            $stm = $this ->con->prepare($spl);
            $description = $products->getDescription();
            $stm->bindParam(':pDescription', $description);
            $stm->bindValue(':pName', $products->getName());
            $stm->bindValue(':pPrice', $products->getPrice());
            $stm->execute();
        }catch(PDOException $e){
                echo $e->getMessage();
        }
    }
    public function getProductById($productId){
        try{
            $sql = "SELECT * FROM products WHERE Id = :Id";
            $stm = $this->con->prepare($sql);
            $stm->bindParam(":Id", $productId, PDO::PARAM_INT);

            if($stm->execute()){
                $productData = $stm->fetch(PDO::FETCH_ASSOC);
                if($productData){
                    $product = new Product();
                    $product->setId($productData['Id']);
                    $product->setName($productData['Name']);
                    $product->setDescription($productData['Description']);
                    $product->setPrice($productData['Price']);
                    return $product;
                }
            }
            return null;
        } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }
    public function updateProduct(Product $product) {
        try {
            $sql = "UPDATE products SET name = :name, description = :description, price = :price WHERE id = :id";
            $stm = $this->con->prepare($sql);
            
            $stm->bindValue(":id", $product->getId(), PDO::PARAM_INT);
            $stm->bindValue(":name", $product->getName(), PDO::PARAM_STR);
            $stm->bindValue(":description", $product->getDescription(), PDO::PARAM_STR);
            $stm->bindValue(":price", $product->getPrice(), PDO::PARAM_INT);

            return $stm->execute();
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            
        }
    }
    
    public function deleteProduct(Product $product) {
        try {
            $sql = "DELETE FROM products WHERE Id = :id";
            $stm = $this->con->prepare($sql);
            $stm->bindValue(":id", $product->getId(), PDO::PARAM_INT);
            return $stm->execute();
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    
}