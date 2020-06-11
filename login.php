<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="header">
      <h2>CENTRAL CRIMINAL DATABASE</h2>
    </div>

    <form class="" action="login.php" method="post">

      <br> <h4>please login</h4> <br>

      <div class="input_info">
        <label>Username  </label>
        <input type="text" name="myusername" required>
      </div>

      <div class="input_info">
        <label>Password  </label>
        <input type="password" name="mypassword" required>
      </div>

      <div class="input_info">
        <button type="submit" name="loginbtn" class="btn">LOGIN</button>
      </div>

      <p> Not Registered ? <a href="userReg.php" style="color: DeepSkyBlue;"> SIGN UP</a> </p>

    </form>

  </body>
</html>

<?php
   include('dbSvrConnect.php');

   if (isset($_POST['loginbtn'])){

     $uName = $_POST['myusername'];
     $uPass = $_POST['mypassword'];

     $validationQ = "SELECT * FROM `user_reg` WHERE username = '$uName' AND password = '$uPass'";
     $runVQ =  mysqli_query($mySCon,$validationQ);

     $numRow = mysqli_num_rows($runVQ);

     if($numRow<1){
       ?>
       <script >
          alert('Username and password do not match...!!!');
          window.open('login.php','_self');
       </script>
       <?php
     }


     else {

        $data = mysqli_fetch_assoc($runVQ);
        $id   = $data['id'];

        $validationQ2 = "SELECT  `userDomain` FROM `user_reg` WHERE id = '$id'";
        $domobj  =  mysqli_query($mySCon,$validationQ2);

        $datadom = mysqli_fetch_assoc($domobj);
        $dom = $datadom['userDomain'];

        echo "ID : ".$id;
        echo "Domain : ".$dom;

        if( strcmp($dom ,"admin")== 0){

          session_start();
          $_SESSION['uid'] = $id;
          header('location:domadmindesh.php');
        }

        elseif (strcmp($dom ,"citizen") == 0) {

          session_start();
          $_SESSION['uid'] = $id;
          header('location:domcitizendesh.php');
        }

        else {

          session_start();
          $_SESSION['uid'] = $id;
          header('location:domlawdesh.php');

        }




      }

   }//main if
 ?>
