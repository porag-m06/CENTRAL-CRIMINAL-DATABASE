<?php
    session_start();
     if(isset($_SESSION['uid'])){
      // echo "Your id : ".$_SESSION['uid'];
     }else {
       header('location:login.php');
     }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Citizen Deshboar</title>
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>

    <div class="header">
      <h2>CENTRAL CRIMINAL DATABASE</h2>
    </div>

    <form class="" action="domcitizendesh.php" method="post" >

      <br> <h3 style="color: Orange">Citizen Deshbord</h3> <br>
      <div class="Desh_menu">
        <label>Main Menu</label>
      </div>

      <div class="input_info">
        <br>
        <button type="submit" name="filereport" class="btn" style="color: Orange;margin:2px;width:50%"># [File a report]</button><h6></h6>
        <button type="submit" name="checkreport" class="btn"style="color: Orange;margin:2px;width:50%"># [Check report status]</button><h6></h6>
      </div>

    </form>


  </body>
</html>

<?php

     if (isset($_POST['filereport'])){
       header('location:cfileReport.php');
     }elseif (isset($_POST['checkreport'])) {
       header('location:cCheckReport.php');
     }

 ?>
