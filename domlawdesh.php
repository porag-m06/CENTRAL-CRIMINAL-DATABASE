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
    <title>Law-Enforcement Deshboar</title>
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>

    <div class="header">
      <h2>CENTRAL CRIMINAL DATABASE</h2>
    </div>

    <form class="" action="domlawdesh.php" method="post">

      <br> <h3 style="color: DeepSkyBlue">Law-enforcement Deshbord</h3> <br>
      <div class="Desh_menu">
        <label>Main Menu</label>
      </div>

      <div class="input_info">


        <br>
        <button type="submit" name="lviewReport" class="btn" style="color: DeepSkyBlue;margin:2px;width:50%"># [View Citizen Reports.]</button><h6></h6>
        <button type="submit" name="lviewCriminal" class="btn"     style="color: DeepSkyBlue;margin:2px;width:50%"># [View criminal data.]</button><h6></h6>
        <button type="submit" name="laddCrime" class="btn"   style="color: DeepSkyBlue;margin:2px;width:50%"># [Add crime data.]</button><h6></h6>
        <button type="submit" name="ldeleteCrime" class="btn"   style="color: DeepSkyBlue;margin:2px;width:50%"># [Delete crime data.]</button><h6></h6>
        <button type="submit" name="lUpdateCrime" class="btn"   style="color: DeepSkyBlue;margin:2px;width:50%"># [Update crime data.]</button><h6></h6>
      </div>


      <div class="input_info">
        <br> <br>  <h2>Deep Search  </h2>
        <input type="text" name="DeepSearchkey">
      </div>

      <div class="input_info">
        <button type="submit" name="searchlabelbutton" class="btn">Search</button>
      </div>

    </form>


  </body>
</html>

<?php

     if (isset($_POST['lviewReport'])){
       header('location:lviewReportt.php');
     }elseif (isset($_POST['lviewCriminal'])) {
       header('location:lviewCriminall.php');
     }elseif (isset($_POST['laddCrime'])) {
       header('location:laddCrimee.php');
     }elseif (isset($_POST['ldeleteCrime'])) {
       header('location:ldeleteCrimee.php');
     }elseif (isset($_POST['lUpdateCrime'])) {
       header('location:lUpdateCrimee.php');
     }

 ?>
