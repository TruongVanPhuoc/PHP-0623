<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        caption {
            text-align: left;
            margin-bottom: 10px;
        }

        .profile img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
        }

        /* Custom styles for coloring */
        body {
            background-color: #f1f1f1;
        }

        table {
            background-color: #fff;
            margin-bottom: 20px;
        }

        th {
            background-color: #e5e5e5;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .profile img {
            border: 2px solid #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>
    <?php
    $customerList = [
        "1" => [
            "name" => "Mai Văn Hoàn",
            "day_of_birth" => "1983/08/20",
            "address" => "Hà Nội",
            "profile" => "images/img1.jpg"
        ],
        "2" => [
            "name" => "Nguyễn Văn Nam",
            "day_of_birth" => "1983/08/21",
            "address" => "Bắc Giang",
            "profile" => "images/img2.jpg"
        ],
        "3" => [
            "name" => "Nguyễn Thái Hòa",
            "day_of_birth" => "1983/08/22",
            "address" => "Nam Định",
            "profile" => "images/img3.jpg"
        ],
        "4" => [
            "name" => "Trần Đăng Khoa",
            "day_of_birth" => "1983/08/17",
            "address" => "Hà Tây",
            "profile" => "images/img4.jpg"
        ],
        "5" => [
            "name" => "Nguyễn Đình Thi",
            "day_of_birth" => "1983/08/19",
            "address" => "Hà Nội",
            "profile" => "images/img5.jpg"
        ]
    ];
    function searchByDate($customers, $fromDate, $toDate)
    {
        if (empty($fromDate) || empty($toDate)) {
            return $customers;
        }

        $filteredCustomers = [];
        foreach ($customers as $customer) {
            if (strtotime($customer['day_of_birth']) < strtotime($fromDate))
                continue;
            if (strtotime($customer['day_of_birth']) > strtotime($toDate))
                continue;
            $filteredCustomers[] = $customer;
        }
        return $filteredCustomers;
    }
    $fromDate = $_REQUEST["from"] ?? null;

    $toDate = $_REQUEST["to"] ?? null;

    $filteredCustomers = searchByDate($customerList, $fromDate, $toDate)
    ?>
    <form method="GET">
        Chọn ngày sinh từ: <input id="from" type="date" name="from" placeholder="yyyy/mm/dd" value="" />
        đến: <input id="to" type="date" name="to" placeholder="yyyy/mm/dd" value="" />
        <input type="submit" id="submit" value="Lọc" />
    </form>
    <table>
        <caption>
            <h2>Danh sách khách hàng</h2>
        </caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
        <?php foreach ($filteredCustomers as $index => $customer) : ?>
            <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo $customer['name']; ?></td>
                <td><?php echo $customer['day_of_birth']; ?></td>
                <td><?php echo $customer['address']; ?></td>
                <td>
                    <div class="profile"><img src="<?php echo $customer['profile']; ?>" /></div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>