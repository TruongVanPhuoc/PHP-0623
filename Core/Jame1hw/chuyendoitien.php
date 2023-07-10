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
      width: 200px;
      padding: 8px;
      font-size: 16px;
      border-radius: 4px;
      border: 1px solid #cccccc;
    }

    button {
      width: 215px;
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
    $amount = null;
    if (array_key_exists('amou', $_POST)) {
      $amount = $_POST["amou"];
    }
    $result = $amount * 23000;
  }
  ?>
  <div class="container">
    <h1>Currency Converter</h1>
    <form action="" method="POST">
      <fieldset>
        <legend>USD to VND</legend>
        <div>
          <label for="">Amount:</label>
          <input type="text" value="<?php echo $amount ?? ""; ?>" name="amou">
          <label for="">USD</label>
        </div>
        <div>
          <button>Convert</button>
          <label for=""></label>
          <div class="result"><?php echo $result ?? ""; ?><label for="">VND</label></div>
        </div>
      </fieldset>
    </form>
  </div>
</body>

</html>
</body>

</html>