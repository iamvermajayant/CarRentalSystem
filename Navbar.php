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
                <li><a href="#">Home</a></li>
                <li><a href="Cars.php">Cars</a></li>
                <li><a href="#">About</a></li>
                <li id="login"><a href="Login.php">Login</a></li>
                <li id="signup"><a href="SignUp.php">Signup</a></li>
            </ul>
        </nav>
        <div id="hamburger-icon" onclick="mobileview(this)">
            <!-- hamburger icon for screen less than 600px -->
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <ul class="mobile-view">
                <li><a href="">Home</a></li>
                <li><a href="Cars.php">cars</a></li>
                <li><a href="">About</a></li>
                <li id="login"><a href="Login.php">Login</a></li>
                <li id="signup"><a href="SignUp.php">Signup</a></li>
            </ul>
        </div>
    </header>
    <section class="one">
        <div class="car">
            <div class="car__top"></div>
            <div class="car__body">
                <div class="car__bulb"></div>
                <div class="car__bulb car__bulb--back"></div>
                <div class="car__center"></div>
            </div>
            <div class="car__wheels">
                <div class="car__wheel car__wheel--1">
                    <div class="wheel__circle"></div>
                    <div class="wheel__rect wheel__rect--1"></div>
                    <div class="wheel__rect wheel__rect--2"></div>
                    <div class="wheel__rect wheel__rect--3"></div>
                    <div class="wheel__rect wheel__rect--4"></div>
                    <div class="wheel__rect wheel__rect--5"></div>
                    <div class="wheel__rect wheel__rect--6"></div>
                </div>
                <div class="car__wheel car__wheel--2">
                    <div class="wheel__circle"></div>
                    <div class="wheel__rect wheel__rect--1"></div>
                    <div class="wheel__rect wheel__rect--2"></div>
                    <div class="wheel__rect wheel__rect--3"></div>
                    <div class="wheel__rect wheel__rect--4"></div>
                    <div class="wheel__rect wheel__rect--5"></div>
                    <div class="wheel__rect wheel__rect--6"></div>
                </div>
            </div>
        </div>
        <div class="cloud" style="--delay:1s;--top:10vmin"></div>
        <div class="cloud" style="--delay:3s;--top:20vmin"></div>
        <div class="cloud" style="--delay:7s;--top:10vmin"></div>
    </section>


</body>

</html>