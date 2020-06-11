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
    <title> File report</title>
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <div class="header">
      <h2>CENTRAL CRIMINAL DATABASE</h2>
    </div>

    <form class="" action="cfileReport.php" method="post" enctype="multipart/form-data" >

      <br> <h3 style="color: Orange">Citizen Deshbord</h3> <br>
      <div class=""><label>Start Reporting</label></div><br>

       <div class="input_info">
         <table style="text-align: left;">
           <tr>
             <th style="width: 20%;">Crime Type:</th>
             <td style="width: 80%;">
               <select class="input_info" name="crimetype"
               style="
               width: 97%;
               background:#4C4C4C;
               color:#f57a7a;
               padding: 5px 10px;
               margin-left: 3px;
               font-size: 16px;
               border-radius: 7px;
               border: 1px solid white;">

                 <option value="1">Select Crime Type </option>
                 <option value="Theft Crimes [Auto/Shopliting/Robery]">Theft Crimes [Auto/Shopliting/Robery]</option>
                 <option value="Drug Crimes [Possenssion/Trafficking/Manufacturing]">Drug Crimes [Possenssion/Trafficking/Manufacturing]</option>
                 <option value="Abusive Crimes [chid abuse/Domestic abuse]">Abusive Crimes [chid abuse/Domestic abuse]</option>
                 <option value="Violence [Fight/Gang war/shooting/kidnap]">Violence [Fight/Gang war/shooting/kidnap]</option>
                 <option value="Sexual Assault [Child Molestation/Misconduct/Rape]">Sexual Assault [Child Molestation/Misconduct/Rape]</option>
                 <option value="Public Indecency [Eve-teasing/ Cummunal disturbance]">Public Indecency [Eve-teasing/ Cummunal disturbance]</option>
                 <option value="Homicide [Murder/Gun shot/killing in accident etc]">Homicide [Murder/Gun shot/killing in accident etc]</option>
               </select>
             </td>
           </tr>
           <tr>
             <th style="width: 20%;">Discription:</th>
             <td style="width: 80%;border: none;"><input type="text" name="discription" placeholder="Discribe the crime"></td>
           </tr>
           <tr>
             <th style="width: 20%;">Place:</th>
             <td style="width: 80%;"><input type="text" name="place"placeholder="Place of the crime" required></td>
           </tr>
           <tr>
             <th style="width: 20%;">Time & Date:</th>
             <td style="width: 80%;"><input type="text" name="dnt" placeholder="Possible date and time" required></td>
           </tr>
           <tr>
             <th style="width: 20%;">Suspect:</th>
             <td style="width: 80%;"><input type="text" name="suspect" placeholder="possible suspect info"></td>
           </tr>
           <tr>
             <th style="width: 20%;">Image:</th>
             <td style="width: 80%;"><input type="file" name="cimage" ></td>
           </tr>
         </table>
       </div>

      <div class="input_info">
        <br> <button type="submit" name="submit" class="btn" style="color: Orange;margin:2px;width:50%">FILE REPORT</button><h6></h6>
      </div>
    </form>
  </body>
</html>


<?php
      if(isset($_POST['submit']))
      {
        include('dbcon.php');

          $ctype = $_POST['crimetype'];
          $discription = $_POST['discription'];
          $place = $_POST['place'];
          $dNt = $_POST['dnt'];
          $supect = $_POST['suspect'];

          $image = $_FILES['cimage']['name'];
          $imagetempname = $_FILES['cimage']['temp_name'];

          move_uploaded_file($temp_name,"/cimg/$image");


          $mqry ="INSERT INTO `creport`(`crime_type`, `discription`, `place`, `d&t`, `suspact`,`cimage`) VALUES ('$ctype','$discription','$place','$dNt','$supect','$image')";
          $run =  mysqli_query($myCon,$mqry);
          if($run == true){
            ?>
            <script>
              alert('Your file reported successfully...');
            </script>

            <?php

          }

      }

 ?>
