<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
         $cars = [
            ["Volvo",  22,  18],
            ["BMW",   15, 13],
            ["Saab",5,  2],
            ["Land Rover",  17,  15]
        ];
    ?>
    <table border="1"  style="border-collapse: collapse;">
        <tr>
            <th>Name</th>
            <th>Stock</th>
            <th>Sold</th>
        </tr>
        <tr>
            <?php 
           
            foreach($cars as $value): ?>
            <th><?= $value[0]?></th>
            <th><?= $value[1]?></th>
            <th><?= $value[2]?></th>  
        </tr>
        <?php endforeach; ?>
        
    </table>
</body>

</html>