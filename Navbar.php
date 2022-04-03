
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/car.css">
    <title>Document</title>
</head>


<body>
    <header>
        <div class="logo">
            <a href="#">Car Rental</a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Cars.php">Cars</a></li>
                <li><a href="Booking.php">Booking</a></li>
                <?php if(!isset($_SESSION['username'])){
                    echo "<li id=\"login\"><a href=\"Login.php\" >Login</a></li>
                    <li id=\"signup\"><a href=\"SignUp.php\">Signup</a></li>";
                }
                ?>
                <?php if(isset($_SESSION['username'])){
                    echo "<li id=\"login\"><a href=\"Logout.php\" >Logout</a></li>";
                }
                ?>
            </ul>
        </nav>
        <div id="hamburger-icon" onclick="mobileview(this)">
            <!-- hamburger icon for screen less than 600px -->
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <ul class="mobile-view">
                <li><a href="index.php">Home</a></li>
                <li><a href="Cars.php">cars</a></li>
                <li><a href="Booking.php">Booking</a></li>
                <li id="login"><a href="Login.php">Login</a></li>
                <li id="signup"><a href="SignUp.php">Signup</a></li>
            </ul>
        </div>
    </header>
</body>


</html>