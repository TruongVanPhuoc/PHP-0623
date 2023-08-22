<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" 
    integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        *{
            font-size: 14px;
        }
    </style>
</head>
<body >
   <div class="container-md ">
   <h1  class="text-center mb-5 ">List of Products</h1>
   
   <div class="mb-2 ">
   <a  href="<?= $_SERVER['PHP_SELF'] .'?action=create' ?>" class="btn btn-primary">Add New Product</a>
   </div>
    <table class="table table-striped-columns table-primary  ">
       
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php foreach($products as $key=>$p): ?>
                <tr>
                    <td><?= $p['Id'] ?></td>
                    <td><?= $p['Name'] ?></td>
                    <td><?= $p['Description'] ?></td>
                    <td><?= $p['Price'] ?></td>
                    <td>
                        <a href="<?= $_SERVER['PHP_SELF'] .'?action=edit&id=' . $p['Id'] ?>" ><i class="fa-solid fa-pen-to-square fa-beat"></i></a>/
                        <a href="<?= $_SERVER['PHP_SELF'] .'?action=delete&id='.$p['Id'] ?>"><i class="fa-solid fa-trash fa-beat"></i></a>
                    </td>    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
   </div>
</body>
</html>