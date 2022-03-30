<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/CarForm.css">
</head>
<body>
  <?php
    require('db.php');
    if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $age = $_POST['age'];
      $car_name = $_POST['car_name'];
      $messages = $_POST['messages'];
      
      $sql = "INSERT INTO `booking` (name, email, age, car_name, messages) VALUES ('$name', '$email', '$age','$car_name','$messages') ";
      $result = mysqli_query($con, $sql);

      if($result){
        ?>
        <script>
          alert("booking done");
        </script>
        <?php
      }
      else{
        ?>
        <script>
          alert("booking not done");
        </script>
        <?php
        
      }
    }
  ?>
<div class="main">
 
 <h1 id="title">CAR BOOKING FORM</h1>
 <p id="description">
   Fill details below to complete your Booking
 </p>
 
  <div class="main-content">
  <div class="form-content">
   <form id="survey-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
     <label for="name" id="name-label">Name</label>
     <input id="name" type="text" required placeholder="Enter your name" name="name" />
     <label for="email" id="email-label">Email</label>
     <input id="email" type="email" required placeholder="Enter your email" name="email" />
     <label for="number" id="number-label">Age</label>
     <input id="number" type="number"min="18" max="60" required placeholder="Enter your Age" name="age" />
     
     <label for="dropdown">Select car model</label>
     <input id="name" type="text" required placeholder="Enter Car name" name="car_name" />
  
     <label for="comment">Any comments or suggestions?</label>
     <textarea rows="4" cols="50" id="comment" name="messages">Enter your comment here...</textarea>
     
     <button type="submit" id="submit" name="submit">Submit</button>
   </form>
 </div>
 </div>
</div>

</body>
</html>
