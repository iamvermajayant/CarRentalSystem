<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminDashboard.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Document</title>
</head>

<body>
    <div class="sidenav">
        <a href="adminDashboard.php">All Orders</a>
        <a href="AddProduct.php">Add Product</a>
        <a href="ViewProduct.php">View Product</a>
        <a href="adminLogout.php">Logout</a>
    </div>

    <div class="container">
        <h2>HTML Table</h2>

        <table>
            <tr>
                <th>Booking_id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>car_name</th>
                <th>messages</th>
                <th>Status</th>
            </tr>
            <?php
            require('../db.php');
            $sql = "select * from booking";

            $query = mysqli_query($con, $sql);

            while ($result = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $result['booking_id'] ?></td>
                    <td><?php echo $result['name'] ?></td>
                    <td><?php echo $result['email'] ?></td>
                    <td><?php echo $result['age'] ?></td>
                    <td><?php echo $result['car_name'] ?></td>
                    <td><?php echo $result['messages'] ?></td>
                    <td>
                        <?php
                            if($result['status'] == 1){
                                echo '<p><a style="text-decoration: none; background-color: green; color: white; padding: 5px 5px; border-radius: 5px; " href="status.php?booking_id='.$result['booking_id'].'&status=0">Booking Approved</a></p>';
                            }else{
                                echo '<p><a style="text-decoration: none; background-color: red; color: white; padding: 5px 5px; border-radius: 5px; class="redsignal" href="status.php?booking_id='.$result['booking_id'].'&status=1">Booking Rejected</a></p>';
                            }
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>

        </table>
    </div>
</body>

</html>