<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/Login.css">
  <title>Document</title>
</head>

<body>
  <?php

  include 'db.php';

  if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $pass = password_hash($password, PASSWORD_BCRYPT);

    $emailquery = "Select * from signup where username = '$username' ";
    $query = mysqli_query($conn, $emailquery);

    $emailcount = mysqli_num_rows($query);


    if($emailcount > 0) {
  ?>
      <script>
        alert("Email Already exists");
      </script>
      <?php
    } 
    else {
      $insertquery = "insert into signup(username, password) values ('$username', '$pass')";
      $iquery = mysqli_query($conn, $insertquery);

      if ($iquery) {
      ?>
        <script>
          alert("inserted successfully");
        </script>
      <?php
      } else {
      ?>
        <script>
          alert("not inserted");
        </script>
  <?php
      }
    }
  }
  ?>

  <div class="login-box">
    <h2>Sign Up</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <div class="user-box">
        <input type="text" name="username" required="" />
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="" />
        <label>Password</label>
      </div>
      <button class="submit" href="#" type="submit" name="submit">
        Submit
      </button>
    </form>
    <p class="signin">already registered<a href="Login.php" class="signinlink">Click here</a></p>
  </div>
</body>

</html>