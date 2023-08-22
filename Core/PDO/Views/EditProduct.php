<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container-md mt-5  ">
     <h1  class="text-center mb-5 ">Create Products</h1>
     <div class="col-md-6 mx-auto">
     <form class="" method="POST" action="<?= $_SERVER['PHP_SELF'].'?action=edit' ?>">
     <input class="input-group-text" type="hidden" name="id" value="<?php echo $product->getId(); ?>">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Name Product:</span>
                <input type="text" class="form-control" value="<?php echo $product->getName(); ?>" name="name" placeholder=""  aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Description:</span>
                <input type="text" class="form-control col" value="<?php echo $product->getDescription(); ?>" name="description" placeholder=""  aria-label="Username" aria-describedby="basic-addon1">
                
                <span class="input-group-text" id="basic-addon1">Price:</span>
                <input type="text" class="form-control" value="<?php echo $product->getPrice(); ?>" name="price" placeholder=""  aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-2">
                <select class="form-select-sm" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                </select>
            </div>
        <div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="<?= $_SERVER['PHP_SELF']?>" class="btn btn-primary">Cancel</a>
        </div>
    </form>
     </div>
     </div>
</body>
</html>