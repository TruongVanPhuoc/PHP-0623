<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 400px;
            padding: 20px;
            border-radius: 5px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333333;
        }

        form {
            margin-top: 20px;
        }

        fieldset {
            border: none;
            padding: 0;
            margin: 0;
        }

        legend {
            font-weight: bold;
            margin-bottom: 10px;
            color: #333333;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555555;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #cccccc;
        }

        button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: #333333;
        }
    </style>

</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $amount = $ints = $years = null;
        if (array_key_exists('amount', $_POST)) {
            $amount = $_POST["amount"];
        }
        if (array_key_exists('ints', $_POST)) {
            $ints = $_POST["ints"];
        }
        if (array_key_exists('years', $_POST)) {
            $years = $_POST["years"];
        }
        if (!is_numeric($amount) || !is_numeric($ints) || !is_numeric($years)) {
            $result = "Invalid input!";
        } else {
            $result = $amount + (($amount * ($ints/100)) * $years);
        }
            
        }
  
    ?>
    <div class="container">
        <form action="" method="post">
            <fieldset>
                <legend>Product Discount Calculator</legend>
                <div>

                    <input type="text" value="<?php echo $amount ?? "" ?>" placeholder="Inventment Amount" name="amount" >
                </div>
                <div>

                    <input type="text" value="<?php echo $ints ?? "" ?>" placeholder="Yearly Interest Rate" name="ints">
                </div>
                <div>

                    <input type="text" value="<?php echo $years ?? "" ?>" placeholder="Number of Years" name="years">
                </div>
                <div>
                    <label for=""></label>
                    <button>Calculate</button>
                </div>
                <div>
                    <div class="result"><?php echo $result ?? ""; ?></div>
                </div>
            </fieldset>
        </form>
    </div>
</body>


</html>