
<?php

        $myCon = mysqli_connect('localhost','root','','cdbm');

        if($myCon){
           echo "connected...";
         }else{
           echo "failed";
         }


 ?>
