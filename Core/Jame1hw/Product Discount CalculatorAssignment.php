<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .form {
            width: 70%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form h3 {
            text-align: center;
            color: #333;
        }

        .form label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        .form select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
        }

        .form button {
            padding: 8px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

       
        

        .result {
            margin-top: 10px;
            text-align: center;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<?php
$name = $price = $discount = null;
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
    }
    if (isset($_GET['price'])) {
        $price = $_GET['price'];
    }
    if (isset($_GET['discount'])) {
        $discount = $_GET['discount'];
    }
    $result = $price - ($price * $discount);
}

?>

<body>
    <div>
        <form action="" method="get" class="form justity-content-center">
            <fieldset>
                <h3>ProductDiscount</h3>
                <div>
                    <label for="">Sản phẩm</label>
                    <select name="name" id="">
                        <option value="iphone" <?php echo $name == "iphone" ? "selected" : false ?>>Iphone</option>
                        <option value="samsung" <?php echo $name == "samsung" ? "selected" : false ?>>Samsung</option>
                        <option value="huewai" <?php echo $name == "huewai" ? "selected" : false ?>>Huewai</option>

                    </select>
                </div>
                <div>
                    <label for="">Giá</label>
                    <select name="price" id="">
                        <option value="20000000" <?php echo $price == "20000000" ? "selected" : false ?>>20 Triệu</option>
                        <option value="30000000" <?php echo $price == "30000000" ? "selected" : false ?>>30 Triệu</option>
                        <option value="40000000" <?php echo $price == "40000000" ? "selected" : false ?>>40 Triệu</option>

                    </select>
                    <label for="">Chiết khấu</label>
                    <select name="discount" id="">
                        <option value="0.15" <?php echo $discount == "0.15" ? "selected" : false ?>>15%</option>
                        <option value="0.2" <?php echo $discount == "0.2" ? "selected" : false ?>>20%</option>
                        <option value="0.3" <?php echo $discount == "0.3" ? "selected" : false ?>>30%</option>
                    </select>
                </div>
                <div>
                    <button type="submit">Tính toán</button>
                   
                    <?php
                    if ($result != null) {
                        echo "<label>Thành tiền: $result  </label>";
                    }
                    ?>


                </div>
            </fieldset>

        </form>
    </div>
</body>

</html>