<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Registration</title>
     <link rel="stylesheet" href="style3.css">
   </head>

   <body>

     <div class="header">
       <h2>CENTRAL CRIMINAL DATABASE</h2> <br>
     </div>
     <form class="" action="index.html" method="post">

       <div class="input_info">
         <br><br>
         <h3>Registration progress</h3>
         <h3>______________________________</h3>
         <br>
       </div>
       <?php
          $userDomain   = strtolower($_POST['userdomain']) ;
          $userName     = $_POST['username'];
          $uPassword    = $_POST['password'];
          $uConPassword = $_POST['confirmpassword'];

          if($uPassword == $uConPassword){
            $myCon = mysqli_connect('localhost','root','','cdbm');
            /*
            if($myCon){
               echo "connected...";
             }else{
               echo "failed";
             }
             */

            $InsertQ ="INSERT INTO `user_reg`(`userDomain`, `username`, `password`) VALUES ('$userDomain', '$userName','$uPassword')";
            $runQ =  mysqli_query($myCon,$InsertQ);

            if($runQ){
              ?><h4 >Congratulations..</h4>
              <label>::  Your are registered  ::</label>
              <a href='login.php' style="color:Darkblue;"><br> <br>  Click to SIGN IN</a><?php
            }
          }else{
            ?><h2 style="color:#b30000"> Sorry..</h2>
            <label>  Confirm Password does not match..!!!  </label>
            <a href='userReg.php' style="color:Darkblue;"><br> <br>Click here to try again</a><?php

          }
        ?>
        <br><br><br><br>

     </form>

   </body>
 </html>
