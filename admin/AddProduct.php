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
            width: 70%;
            margin-left: 270px;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .Car_Info,
        .Car_name,
        .country {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .submit {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .submit:hover {
            background-color: #45a049;
        }

        .upload {
            width: 100%;



            margin: 8px 0;
            border: none;

            cursor: pointer;
        }
    </style>

</head>

<body>
    <?php
    require('../db.php');
        if(isset($_POST['submit'])){
            $car_name = $_POST['car_name'];
            $Car_Info = $_POST['car_Info'];
            $car_image = $_FILES['uploadfile']['name'];
            $car_temp_name= $_FILES['uploadfile']['tmp_name'];
            $folder = "images/".$car_image;

            $sql = "INSERT INTO `product` (car_name, car_info, car_image) VALUES ('$car_name', '$Car_Info', '$car_image') ";

            mysqli_query($con, $sql);

            if(move_uploaded_file($car_temp_name, $folder)){
                echo "added successfully";
            }
            else{
                echo "not added";
            }
        }
    ?>
    <div class="sidenav">
        <a href="AddProduct.php">Add Product</a>
        <a href="ViewProduct.php">View Product</a>
        <a href="#clients">Clients</a>
        <a href="#contact">Contact</a>
        <a href="#contact">Logout</a>
    </div>

    <div class="container">
        <h3>Using CSS to style an HTML Form</h3>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <label for="fname">Car Name</label>
            <input class="Car_name" type="text" id="fname" name="car_name" placeholder="Enter Car name..">

            <label for="lname">Car Info</label>
            <input class="Car_Info" type="text" id="lname" name="car_Info" placeholder="Enter Car Info..">

            <label for="country">Car Image</label><br>
            <input type="file" class="upload" name="uploadfile">

            <input class="submit" type="submit" value="Submit" name="submit">
        </form>
    </div>



</body>

</html>