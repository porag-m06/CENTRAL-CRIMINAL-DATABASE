<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Window</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="header"> <h2>REGISTRATION WINDOW</h2> </div>

    <form class="" action="userRegInsert.php" method="post">
      <div class="input_info">
        <label>User Domain</label>
        <h6>(CITIZEN  or  LAW-ENFORCEMENT  or  ADMIN)</h6>
        <input type="text" name="userdomain" required>
      </div>

      <div class="input_info">
        <label>Username  </label>
        <input type="text" name="username" required>
      </div>

      <div class="input_info">
        <label>Password  </label>
        <input type="password" name="password" required>
      </div>

      <div class="input_info">
        <label>Confirm Password  </label>
        <input type="password" name="confirmpassword"required>
      </div>

      <div class="input_info">
        <button type="submit" name="register" class="btn">Register</button>  </div>
      <p>  Registered already ? <a href="login.php" style="color: DeepSkyBlue;">SIGN IN</a></p>
    </form>
  </body>

</html>
