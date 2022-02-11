<?php
   $server="localhost";
   $username="root";
   $password="";
   $connect=mysqli_connect($server,$username,$password);
   if($connect){
       echo "server connect successfully";

   }
   else{
       echo"server not connect".mysqli_error();
   }


?>