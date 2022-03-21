<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/Login.css">
    <title>CarRental</title>
  </head>
  <body>

    <div class="login-box">
      <h2>Login</h2>
      <form>
        <div class="user-box">
          <input type="text" name="username" required/>
          <label>Username</label>
        </div>
        <div class="user-box">
          <input type="password" name="password" required />
          <label>Password</label>
        </div>
        <button class="submit" type="submit" name="submit">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Submit
        </button>
      
      </form>
      <p class="signin">Not registered<a href = "SignUp.php" class="signinlink">Click here</a></p>
    </div>
  </body>
</html>
