<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminDashboard.css">
    <title>Document</title>
    <style>
        .container {
            width: 80%;
            margin-left: 15rem;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <div class="sidenav">
        <a href="adminDashboard.php">All Orders</a>
        <a href="AddProduct.php">Add Product</a>
        <a href="ViewProduct.php">View Product</a>
        <a href="adminLogout.php">Logout</a>
    </div>
    <div class="container">
        <h2>Product Details</h2>
        <table>

            <tr>
                <th>id</th>
                <th>Car Name</th>
                <th>Car Info</th>
                <th>Car Image</th>
            </tr>

            <?php
            require('../db.php');
            $sql =  "select * from product";

            $query = mysqli_query($con, $sql);
            //$result = mysqli_fetch_array($query);

            while ($result = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $result['Product_id'] ?></td>
                    <td><?php echo $result['car_name'] ?></td>
                    <td><?php echo $result['car_info'] ?></td>
                    <td><img src="images/<?php echo $result['car_image'] ?> " width="100" height="100"></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>