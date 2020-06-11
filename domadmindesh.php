<?php
    session_start();
     if(isset($_SESSION['uid'])){
       //echo "Your id : ".$_SESSION['uid'];
     }else {
       header('location:login.php');
     }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>

    <div class="header">
      <h2>CENTRAL CRIMINAL DATABASE</h2>
    </div>

    <form class="" action="domadmindesh.php" method="post" >

      <br> <h3 style="color:#00ff99">Admin Deshbord</h3> <br>
      <div class="Desh_menu">
        <label>Main Menu</label>
      </div>

      <div class="input_info">


        <br>
        <button type="submit" name="aShowUsers" class="btn" style="color: #00ff99;margin:2px;width:50%"># [Show   Reg. users.]</button><h6></h6>
        <button type="submit" name="aAddUsers" class="btn"     style="color: #00ff99;margin:2px;width:50%"># [Add    Reg. users.]</button><h6></h6>
        <button type="submit" name="aDeleteUsers" class="btn"   style="color: #00ff99;margin:2px;width:50%" ># [Delete Reg. users.]</button><h6></h6>
        <button type="submit" name="aUpdateUsers" class="btn"   style="color: #00ff99;margin:2px;width:50%" ># [Delete Reg. users.]</button><h6></h6>
      </div>

      <div class="input_info">
        <br> <br>  <h2>Administrative Search  </h2>
        <input type="text" name="AdminSearchkey">
      </div>

      <div class="input_info">
        <button type="submit" name="searchlabelbutton" class="btn">Search</button>
      </div>

    </form>


  </body>
</html>

<?php

     if (isset($_POST['aShowUsers'])){
       header('location:aShowUserss.php');
     }elseif (isset($_POST['aAddUsers'])) {
       header('location:aAddUserss.php');
     }elseif (isset($_POST['aDeleteUsers'])) {
       header('location:aDeleteUserss.php');
     }elseif (isset($_POST['aUpdateUsers'])) {
       header('location:aUpdateUserss.php');
     }

 ?>
