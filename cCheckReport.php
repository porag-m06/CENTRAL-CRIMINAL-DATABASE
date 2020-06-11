<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Check report</title>
  </head>
  <body>

    <?php
     include('dbcon.php');
     $getQ = "SELECT * FROM `creport` WHERE 1";
     $result =  $myCon->query($getQ);
     if($result->num_row>0){
       while($row = $result->fetch_assoc()) ){
         ?>
         <tr>
           <td><?php echo $row['crime_type']; ?></td>
           <td><?php echo $row['discription']; ?></td>
           <td><?php echo $row['place']; ?></td>
           <td><?php echo $row['d&t']; ?></td>
           <td><?php echo $row['suspact']; ?></td>

         </tr>


         <?php
       }
     }


     ?>

  </body>
</html>
