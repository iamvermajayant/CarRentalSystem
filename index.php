<?php
include ("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="car.css" />
  <title>Document</title>
</head>

<body>
  <?php
  require('Navbar.php');
  ?>
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
  <section class="two">
    <h1>There</h1>
  </section>
  <script src="index.js"></script>
</body>

</html>