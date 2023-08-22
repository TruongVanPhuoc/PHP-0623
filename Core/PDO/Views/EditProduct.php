<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?= $_SERVER['PHP_SELF'] . '?action=edit' ?>">
        <input class="input-group-text" type="hidden" name="id" value="<?php echo $product->getId(); ?>">
        
        <label for="name">Tên sản phẩm:</label>
        <input type="text" name="name" value="<?php echo $product->getName(); ?>" required><br>
        
        <label for="description">Mô tả:</label>
        <textarea name="description"><?php echo $product->getDescription(); ?></textarea><br>
        
        <label for="price">Giá:</label>
        <input type="number" name="price" value="<?php echo $product->getPrice(); ?>" required><br>
        
        <button class="btn btn-outline-primary" type="submit">Lưu thay đổi</button>
    </form>
</body>
</html>