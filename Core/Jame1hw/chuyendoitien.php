<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    .col-6{
      width: 50%;
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
          <button type="submit">Convert</button>
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