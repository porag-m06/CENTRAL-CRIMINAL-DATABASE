<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="style2.css">
  </head>



  <body>

    <div class="header">
      <h2>CENTRAL CRIMINAL DATABASE</h2> <br>
    </div>

    <form class="" action="login.php" method="post">

      <div class="input_info">
        <br> <h4>please select your domain</h4><br><br>
        <button type="submit" name="CITIZEN" class="btn" style="color: DeepSkyBlue;">CITIZEN</button>
        <button type="submit" name="LAW" class="btn" style="color: DeepSkyBlue;">LAW ENFORCEMENT</button>
        <button type="submit" name="ADMIN" class="btn"style="color: DeepSkyBlue;" >ADMIN</button>
      </div>

      <div class="input_info">
        <br> <br> <br>  <h2>General Search  </h2>
        <input type="text" name="searchkey">
      </div>

      <div class="input_info">
        <button type="submit" name="searchlabelbutton" class="btn">Search</button>
      </div>

      <p>Not Registered ? <a href="userReg.php" style="color: DeepSkyBlue;"> SIGN UP</a></p>
    </form>

  </body>
</html>
