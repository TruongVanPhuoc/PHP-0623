<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h2 {
            color: #333;
        }

        .form {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: 80%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .error {
            color: red;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        table th {
            background-color: #f2f2f2;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #eaeaea;
        }
    </style>
</head>
<?php
function loadRegistrations($fileName)
{
    $jsonData = file_get_contents($fileName);
    return json_decode($jsonData, true);
}
function saveDateJSON($fileName, $name, $email, $phone)
{
    try {
        $contact = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        );
        $arrdata = loadRegistrations($fileName);
        array_push($arrdata, $contact);
        $jsonData = json_encode($arrdata, JSON_PRETTY_PRINT);
        file_put_contents($fileName, $jsonData);
        echo " Lưu dữ thiệu thành công!!";
    } catch (Exception $e) {
        echo "Lỗi:", $e->getMessage(), "/n";
    };
}
$nameErr = null;
$emailErr = null;
$phoneErr = null;
$name = null;
$email = null;
$phone = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $hasErr = false;
    if (empty($name)) {
        $nameErr = " Tên không được để trống";
        $hasErr = true;
    }
    if (empty($email)) {
        $emailErr = " Email không được để trống";
        $hasErr = true;
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Định dạng email sai (xxx@xxx.xxx.xxx)!";
            $hasErr = true;
        }
        if (empty($phone)) {
            $phoneErr = " Phone không được để trống";
            $hasErr = true;
        }
        if (!$hasErr) {
            saveDateJSON("user.json", $name, $email, $phone);
            $name = null;
            $email = null;
            $phone = null;
        }
    }
}
?>

<body>
    <h2>Form Đăng ký</h2>
    <form class="form" method="post">
        <fieldset>
            <div class="form-group">
                <label for="fullname">Họ và tên:</label>
                <input type="text" id="fullname" name="name" value="<?php echo $name; ?>"><br>
                <span class="error"><?php echo $nameErr; ?></span>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br>
                <span class="error"><?php echo $emailErr; ?></span>
            </div>

            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="tel" id="phone" name="phone" value="<?php echo $phone; ?>"><br>
                <span class="error"><?php echo $phoneErr; ?></span>
            </div>

            <div class="form-group">
                <input type="submit" value="Đăng ký">
            </div>
        </fieldset>
    </form>

    <?php $registrations = loadRegistrations("user.json"); ?>

    <h2>Registration list</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php foreach ($registrations as $registration) : ?>
            <tr>
                <td><?= $registration['name']; ?></td>
                <td><?= $registration['email']; ?></td>
                <td><?= $registration['phone']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>