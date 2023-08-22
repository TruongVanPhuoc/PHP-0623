<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #ffffff;
        }

        h1 {
            color: #007BFF;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label, input {
            margin-bottom: 10px;
        }

        input[type="number"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        input[type="number"]:hover {
            border-color: #007BFF;
        }

        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        #result {
            margin-top: 20px;
            font-weight: bold;
            color: #007BFF;
        }
    </style>
</head>
<?php

    
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        class QuadraticEquation{
            private $a;
            private $b;
            private $c;
            function __construct($a, $b, $c)
            {
                $this->a = $a;
                $this->b = $b;
                $this->c = $c;
            }
            function getA(){
                return $this->a;
            }
            function getB(){
                return $this->b;
            }
            function getC(){
                return $this->c;
            }
            function getDiscriminant()
            {
                return ($this->b * $this->b) - (4 * $this->a * $this->c);
            }
            function solve()
            {
                $delta = $this->getDiscriminant();
                if ($delta >= 0){
                    if($this -> a != 0)
                    {$x1 = (-$this->b + sqrt($delta)) / (2 * $this->a);
                        $x2 = (-$this->b - sqrt($delta)) / (2 * $this->a);
                        return "Phương trình có nghiệp x1=" . round($x1,2) .",      x2=" . round($x2,2);}
                    else {
                        return "Số a phải khác 0";
                    }
                    
                }
                elseif ($delta === 0) {
                    if ($this->a != 0) {
                      $x = -$this->b / (2 * $this->a);
                      return "Phương trình có nghiệm kép: x = " . round($x, 2);
                    } else {
                      return "Phương trình không hợp lệ. Hệ số a không thể bằng 0.";
                    }
                  } 
                  else {
                    return "Phương trình không có nghiệm thực.";
                  }
            }
                
        }
        $a = null;
        $b = null;
        $c = null;
        if (isset($_GET['a'])) {
            $a = $_GET['a'];}
        if (isset($_GET['b'])) {
            $b = $_GET['b'];}
        if (isset($_GET['c'])) {    
            $c = $_GET['c'];}
        $Equal = new QuadraticEquation($a, $b, $c);
        $result = $Equal->solve();
        
    }
?>
<body>
  <div class="container">
    <h1>Tính phương trình bậc hai</h1>
    <form method="get">
      <label for="a">Nhập hệ số a:</label>
      <input type="number" id="a" name="a" required>
      
      <label for="b">Nhập hệ số b:</label>
      <input type="number" id="b" name="b" required>
      
      <label for="c">Nhập hệ số c:</label>
      <input type="number" id="c" name="c" required>

      <button type="submit">Tính</button>
      <div id="result"><?php echo $result ?></div>
    </form>
  </div>
</body>
</html>