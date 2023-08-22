<!-- Tạo một class controler -->
<?php
include_once './Service/ProductService.php';
include_once './Model/ModelProducts.php';
use Service\ProductService\ProductService;
use Model\Product\Product;

class controller{
    private ProductService $productService;
    function __construct(){
        $this->productService = new ProductService();
    }
    function handleRequest() {
        switch($_SERVER['REQUEST_METHOD']){
            case 'GET':
                $this->handlGetRequest();
                break;
            case 'POST':
                $this->handlPostRequest();
                break;
        }
    }
    function handlGetRequest() {
        $action = "";
        if(!empty($_REQUEST['action'])){
            $action = $_REQUEST['action'];
        }
        switch($action){
            case 'create':
                $this ->createProducts();
                break;
            case 'edit':
                $this ->editProduct();
                break;
            case "delete":
                $this ->deleteProduct();
                break;
            default:
                $this->showProduct();
        }
    }
    function handlPostRequest(){
        $action="";
        if(!empty($_REQUEST['action'])){
            $action = $_REQUEST['action'];
        }
        switch($action){
            case "create":
                $this -> insertProduct();
                break;
            case "edit":
                $this -> updateProduct();
                break;
            case "delete":
                $this ->deleteProduct();
                break;
    
        }
    }
    function insertProduct(){
        $products = new Product();
        if(!empty($_REQUEST['name'])){
            $products -> setName($_REQUEST['name']);
        }
        if(!empty($_REQUEST['description'])){
            $products -> setDescription($_REQUEST['description']);
        }
        if(!empty($_REQUEST['price'])){
            $products -> setPrice($_REQUEST['price']);
        }
        
        $this->productService->saveProduct($products);
        // $this->showProduct();
        header('Location:'.$_SERVER['PHP_SELF']);

    }

    function showProduct(){
        $products = $this -> productService->getProduct();
        include './Views/ListProduct.php';

    }
    function createProducts(){
        include './Views/CreateProduct.php';
    }
    
    
    function editProduct() {
        if (!empty($_REQUEST['id'])) {
            $productId = $_REQUEST['id'];
            $product = $this->productService->getProductById($productId);
            if ($product) {
                include './Views/EditProduct.php';
            } else {
                echo "Không tìm thấy sản phẩm có ID $productId.";
            }
        } else {
            echo "Không có ID sản phẩm được cung cấp.";
        }
    }
    function updateProduct() {
        if (!empty($_REQUEST['id'])) {
            $productId = $_REQUEST['id'];
            $product = $this->productService->getProductById($productId);
            if ($product) {
                if (!empty($_REQUEST['name'])) {
                    $product->setName($_POST['name']);
                }
                if (!empty($_REQUEST['description'])) {
                    $product->setDescription($_POST['description']);
                }
                if (!empty($_REQUEST['price'])) {
                    $product->setPrice($_REQUEST['price']);
                }
                $this->productService->updateProduct($product);
                // $this->showProduct();
                header('Location:'.$_SERVER['PHP_SELF']);
            } else {
                echo "Không tìm thấy sản phẩm có ID $productId.";
            }
        } 
        else {
            echo "Không có ID sản phẩm được cung cấp.";
        }
        
        
    }
    function deleteProduct(){
        if(!empty($_GET['id'])){
            $productId = $_GET['id'];
            $product = $this->productService->getProductById($productId);
            if($product){
                $this ->productService -> deleteProduct($product);
                echo "Đã xóa sản phẩm có ID  $productId";
            }
            else{
                echo "Không tìm thấy sản phẩm có ID $productId.";
            }
        }
        else {
            echo "Không có ID sản phẩm được cung cấp.";}
        
        // $this->showProduct();
        header('Location:'.$_SERVER['PHP_SELF']);
        
    }

}


$controller = new controller();
$controller->handleRequest();
