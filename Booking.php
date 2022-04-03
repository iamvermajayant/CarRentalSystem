<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bookingstyle.css">
    <title>Document</title>
    <style>
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

        tr:nth-child(odd) {
            color: #fff;
        }
    </style>
</head>

<body>
    <?php
    require('auth_session.php');
    require('Navbar.php');
    require('db.php');
    ?>
    <section class="booking-detail">
        <div class="wrapper">
            <h2>HTML Table</h2>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Age</th>
                    <th>car_name</th>
                    <th>messages</th>
                    <th>Status</th>
                </tr>
                <?php
                $user = $_SESSION['username'];
                $sql = "select * from booking where email= '$user'";

                $query = mysqli_query($con, $sql);

                while ($result = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $result['name'] ?></td>
                        <td><?php echo $result['email'] ?></td>
                        <td><?php echo $result['age'] ?></td>
                        <td><?php echo $result['car_name'] ?></td>
                        <td><?php echo $result['messages'] ?></td>
                        <td>
                        <?php 
                        if($result['status'] == 1){
                            echo '<p style=" text-align: center; background-color: green; color: white; padding: 5px 5px; border-radius: 5px; margin: 5px 20px;">Booking Approved</p>';
                        }
                        else{
                            echo '<p style="background-color: red; color: white; padding: 5px 5px; border-radius: 5px; margin: 5px 20px; text-align: center;">Booking Rejected</p>';
                        } 
                        ?>
                        </td>
                    </tr>
                <?php
                }

                ?>

            </table>
        </div>
    </section>
</body>


</html>