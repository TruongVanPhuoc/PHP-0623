<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            display: inline;
        }

        .mb {
            margin: 10px;
        }

        .caculatorform label {
            width: 100px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <script>
        function clickClear(){
            document.getElementById("number1").value = "";
            document.getElementById("number2").value = "";
        }
    </script>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $num2 = null;
        if (array_key_exists('number1', $_POST)) {
            $num1 = $_POST["number1"];
        }
        if (array_key_exists('number2', $_POST)) {
            $num2 = $_POST["number2"];
        }
        $operator = null;
        if (array_key_exists('operator', $_POST)) {
            $operator = $_POST["operator"];
        }

        $result = "";
        if ($operator == 0 && $num2 == '/') {
            $result = "Mẫu số không hợp lệ";
        } else {
            switch ($operator) {
                case "+":
                    $result = $num1 + $num2;
                    break;
                case "-":
                    $result = $num1 - $num2;
                    break;
                case "*":
                    $result = $num1 * $num2;
                    break;
                case "/":
                    $result = $num1 / $num2;
                    break;
            }
        }
    }

    ?>
    <div class="container">
        <form method="POST" class="caculatorform">
            <fieldset>
                <legend>Caculator</legend>
                <div class="mb">
                    <label for="">First number</label>
                    <input type="text" value="<?php echo $num1 ?? "" ?>" name="number1" placeholder="First number">
                </div>

                <div class="mb">
                    <label for="">Operator</label>
                    <select name="operator" id="">
                        <option <?php echo $operator == "+"  ? "selected" : ""  ?> value="+">Add</option>
                        <option <?php echo $operator == "-"  ? "selected" : ""  ?> value="-">Sub</option>
                        <option <?php echo $operator == "*"  ? "selected" : ""  ?> value="*">Mul</option>
                        <option <?php echo $operator == "/"  ? "selected" : ""  ?> value="/">Div</option>
                    </select>
                </div>
                <div class="mb">
                    <label for="">Second number</label>
                    <input type="text" value="<?php echo $num2 ?? "" ?>" name="number2" placeholder="second number">
                </div>
                <div class="mb">
                    <label for=""></label>
                    <button>Caculator</button>
                    <input type="reset" onclick="clickClear()">
                </div>
                <div class="mb">
                    <label for=""></label>
                    <?php echo $result ?? "" ?>
                </div>

            </fieldset>
        </form>

    </div>
</body>

</html>