<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/car.css" />
  <link rel="stylesheet" href="css/ripple.css"/>
  <title>Document</title>
</head>

<body>
  <!-- Header part -->
  <header>
    <div class="logo">
      <a href="#">Car Rental</a>
    </div>
    <nav>
      <ul>
        <li><a href="HomePage.php">Home</a></li>
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
        <li><a href="">cars</a></li>
        <li><a href="">About</a></li>
        <li id="login"><a href="">Login</a></li>
        <li id="signup"><a href="">Signup</a></li>
      </ul>
    </div>
  </header>
  <section class="one" style="display: flex;flex-direction: column;align-items: center;justify-content: center;">
    <div class="heading-headline" style="color: #fff; font-size:4vw; display :flex; 
                flex-direction: column; align-items:center; 
                justify-content: center; margin-bottom: 5rem;">
      <h2 style=" text-align: center;max-width:100%; margin-bottom: 2rem;">Book your Car here</h2>
      <a href="cars.php"><Button class="ripple">Book Now</Button></a>
    </div>
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
  <section class="two" style="display : flex; flex-direction: row; flex-wrap: wrap; justify-content:center; ">
    <div class="info-wrapper" style="margin: 2rem;">
      <a href="cars.php">
        <img src="images/profile.jpeg" width="600" alt="" style="max-width :100%;">
      </a>
    </div>
    <div class="info-wrapper" style="margin: 2rem;">
      <a href="cars.php">

        <img src="images/profile1.jpg" alt="" width="600" style="max-width :100%;">
      </a>
    </div>
    <div class="info-wrapper" style="margin: 2rem;">
      <a href="cars.php">

        <img src="images/profile2.jpeg" alt="" width="600" style="max-width :100%;">
      </a>
    </div>
    <div class="info-wrapper" style="margin: 2rem;">
      <a href="cars.php">
        <img src="images/profile.jpeg" alt="" width="600" style="max-width :100%;">
      </a>
    </div>

  </section>
  <script src="index.js"></script>
</body>

</html>